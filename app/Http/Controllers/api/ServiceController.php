<?php

namespace App\Http\Controllers\api;

use App\User;
use App\Service;
use App\House;
use App\Payment;
use App\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\HouseBookingMail;
use App\Http\RestCurl;
use App\Mail\makePayment;
use App\Http\Resources\House\ServiceResource;
use App\Http\Resources\House\ServiceHouseResource;


class ServiceController extends Controller {

    public function __construct() {
        $this->middleware('auth:api');
    }
    
    public function bookHouse(Request $request) {
        if ($request->filled("house")) {

            // check if house is not booked
            $house = House::where([
                ["id", "=", $request->house],
                ["status", "=", 2]
            ])->first();

            if ($house) {
                try {
                    $service = null;
                    DB::transaction(function() use ($house, &$service) {

                        // update to house to status booked
                        $house->status = 3;
                        $house ->save();
    
                        // book a house
                        $user = Auth::user();
                        $service = Service::create([
                            "user_id" => $user->id,
                            "house_id" => $house->id,
                            "refunded" => "false"
                        ]);
                    });

                    try {
                        $amount = ((float)$house->housePrice * (float)\env("CHARGE_PERCENTAGE")) / 100;
                        $res = $this->sendPayment($amount, $service->id, $this->formatPhoneNumber($service->user->phoneNumber));
                        $res = $res["data"];
                        \Log::info("Payment status: " . $res->description);
                        if ($res->code == "200") {
                            Mail::to($service->user->email)->send(new makePayment());

                            return response()->json([
                                "status" => 200,
                                "description" => "House booked successfully",
                                "serviceID" => $service->id
                            ], 200);
                        }

                        return response()->json([
                            "status" => "500",
                            "description" => "Contact your API provider. " . $res->description
                        ], 500);

                    } catch(\Exception $e) {
                        \Log::error("There was an error sending payment.");
                        \Log::debug("Error details: " . $e->getMessage());

                        return response()->json([
                            "status" => "500",
                            "description" => "Contact your API provider " . $e->getMessage()
                        ], 500);
                    }
                } catch(\Exception $e) {
                    \Log::debug("Error details: " . $e->getMessage());

                    // problem with sending email or saving in the db
                    return response()->json([
                        "status" => "500",
                        "description" => "Contact your API provider."
                    ], 500);
                }
                
            } else {

                // house not available
                return response()->json([
                    "status" => "400",
                    "description" => "Bad Request - house not available"
                ], 400);
            }
            
        } else {

            // invalid params from the api user
            return response()->json([
                "status" => "400",
                "description" => "Bad Request - invalid params"
            ], 400);
        }
    }

    public function refundHouse(Request $request) {
        if ($request->filled(["house", "service"])) {

            // check house is available for booking
            $house = House::where([
                ["id", "=", $request->house],
                ["status", "=", 2]
            ])->first();

            // 
            if ($house) {

                // check if the service is available
                // and belongs to the currently logged user
                $service = Service::where([
                    "id" => $request->service,
                    "refunded" => 'false'
                ])->with('house')->first();

                if ($service && ($service->user_id == Auth::user()->id) && ($service->house->status == 3)) {

                    // check if the price is not above that of the past house
                    if ($house->housePrice <= $service->house->housePrice) {
                        try {

                            DB::transaction(function() use ($house, $service) {
                                $house->status = 3;
                                $house ->save();

                                $house2 = $service->house;
                                $house2->status = 2;
                                $house2->save();
            
                                $service->house_id = $house->id;
                                $service->refunded = "true";
                                $service->save();
                            });

                            return response()->json([
                                "status" => 200,
                                "description" => "House refunded successfully",
                                "serviceID" => $service->id
                            ], 200);
                            
                        } catch(\Exception $e) {

                            // error sending email or savin to db
                            return response()->json([
                                "status" => "500",
                                "description" => "Contact your API provider"
                            ], 500);
                        }
                    } else {


                        // house price not compatible
                        return response()->json([
                            "status" => "400",
                            "description" => "The price of the current house is " .
                            "higher than that of the previously booked house."
                        ], 400);
                    }

                } else {

                    // service does not exist or invalid user
                    return response()->json([
                        "status" => "400",
                        "description" => "Bad Request - Refund not allowed"
                    ], 400);
                }
                
            } else {

                // house not available
                return response()->json([
                    "status" => "400",
                    "description" => "Bad Request - house not available"
                ], 400);
            }
            
        } else {

            // invalid params from user
            return response()->json([
                "status" => "400",
                "description" => "Bad Request - invalid params"
            ], 400);
        }
    }

    public function showBookedHouse($service) {
        \Log::info("show booked house api function");
        \Log::info("user id: " . Auth::user()->id);

        // return house full details
        $service = Service::where([
            ["id", "=", $service],
            ["user_id", "=", Auth::user()->id]
        ])->with('house')->first();
        if ($service) {
            if ($service->house->status != 3){
                // return service timed out error
                return response()->json([
                    "status" => "403",
                    "description" => "Service timeout"
                ], 403);
            }
            if ($service->payment_id) {
                $this->recordView($service->house_id);
                //$payment = Payment::find($service->payment_id);

                if ($service->house /*&& $payment*/) {
                    return new ServiceHouseResource($service);
                }
            } else {
                return response()->json([
                    "status" => "403",
                    "description" => "Please make a payment first"
                ], 404);
            }
        } else {
            return response()->json([
                "status" => "404",
                "description" => "Service not found"
            ], 404);
        }


    }

    public function listBookedHouses(Request $request) {
        $user = Auth::user();
        $services = $user->services()->with('house');
        // pagination
        if ($request->filled(["size", "page"])) {
            $services = $services->offset(($request->page - 1) * $request->size)->limit($request->size);
        }

        $services = $services->get();

        return (ServiceResource::collection($services))
        ->additional([
            "meta" => [
                "count" => count($services)
            ]
        ]);
    }

    private function sendPayment($amount, $serviceID, $phoneNumber) {
        $callbackUrl = \url('/service/callback');
        $merchant = \env("MOMO_MERCHANT_ID");

        \Log::debug("Amount is " . $amount);
        $req = [
            'telephoneNumber' => $phoneNumber, // iyi ni number yumukiriya ugiye kwishyura
            'amount' => $amount, //cash agiye kwishyurwa
            'organizationId' => $merchant, // merchantId yacu
            'description' => 'Payment for booking house services', // description
            'callbackUrl' => $callbackUrl, //redirect Url
            'transactionId' => $serviceID, // iyi ni id transaction yacu ya payment
        ];
        $reqUrl = "https://opay-api.oltranz.com/opay/paymentrequest";


        $response = RestCurl::post($reqUrl,  $req);
        if ($response["data"]->code == "401") {
            $service = Service::find($serviceID);
            $house = $service->house;
            $house->status = 2;
            \Log::info("Payment request failed. Putting house back to status 2");
            try {
                $house->save();
            } catch (\Exception $e) {
                \Log::error("Updating house failed.");
                \Log::error("Error details: " . $e->getMessage());
            }
        }

        return $response;
    }

    private function recordView($id) {
        // record house view
        $ip = $_SERVER['REMOTE_ADDR'];
        $views = View::where('ip_address', $ip)->orderBy('created_at', 'desc')->first();
        if ($views) {
            $current_timestamp = $_SERVER['REQUEST_TIME'];
            $latest_timestamp = strtotime($views->created_at);
            $time_diff = $latest_timestamp + (60 * 60 * 5);
            if ($time_diff < $current_timestamp) {
                $view = View::create([
                    "ip_address" => $ip,
                    "house_id" => $id
                ]);
            }
        } else {
            $view = View::create([
                "ip_address" => $ip,
                "house_id" => $id
            ]);
        }
    }

    /**
     * return an internationally formatted phone number
     * @param string $phone the formatted or unformatted phone number
     * @return string
     */

    private function formatPhoneNumber($MSISDN, $internationalMode = false) {
        $formattedMSISDN = NULL;
        //Get the international country code
        $countryCode = "250";
        

        //Sanitize the phone number || Strip non digits
        $formattedMSISDN = preg_replace('/[^0-9\s]/', "", $MSISDN);

        //If international format, strip the leading 0
        if (substr($formattedMSISDN, 0, 1) == 0 && strlen($formattedMSISDN) == 10) {
            $formattedMSISDN = substr_replace($formattedMSISDN, "", 0, 1);
        }
        
        if(strlen($formattedMSISDN) <= 9 && strlen($formattedMSISDN) > 0) {
            $formattedMSISDN = $countryCode  . $formattedMSISDN;
        }
        
        if($internationalMode) {
            $formattedMSISDN = '+' . $formattedMSISDN;
        }

        //FormattedMSISDN
        return $formattedMSISDN;
    }
}