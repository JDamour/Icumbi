<?php

namespace App\Http\Controllers;

use App\Service;
use App\House;
use App\Payment;
use App\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\HouseBookingMail;
use Illuminate\Http\Request;
use App\Http\RestCurl;
use App\Mail\makePayment;




class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $from = \date_format(date_sub(date_create(date('Y-m-d')), date_interval_create_from_date_string('7 days')), 'Y-m-d');
        $to = date('Y-m-d');
        $services = Service::whereBetween('created_at', [$from, $to])->get()->sortByDesc('created_at');
        return view('services.index', compact('services'));

    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $request->validate([
            "from" => "bail|required|date",
            "to" => "required|date"
        ]);
        $from = \date_format(\date_create($request->input('from')), 'Y-m-d');
        $to = \date_format(\date_create($request->input('to')), 'Y-m-d');


        $services = Service::whereBetween('created_at', [$from, $to])->get()->sortByDesc('created_at');
        return view('services.index', compact('services'));

    }

    public function ownerIndex() {
        $services = [];
        $houses = Auth::user()->house;
        foreach($houses as $house) {
            foreach($house->service as $service) {
                array_push($services, $service);
            }
        }	

        return view('services.ownerIndex', compact('services'));

    }

    public function userIndex() {
        $services = Auth::user()->services()->orderByDesc('created_at')->get();
        return view('services.userIndex', compact('services')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($house_id)
    {
        // @todo show payment form here
        $house = House::find($house_id);
        if ($house) {
            if ($house->status == 2) {
                // hoouse is not booked
                $data = [
                    "house_id" => $house_id,
                    "booked" => false
                ];
                return view('services.create', compact('data'));
            } else if ($house->status == 3) {
                // house booked
                $data = [
                    "house_id" => $house_id,
                    "booked" => true
                ];
                return view('services.create', compact('data'));
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $house = House::find($request->input("house_id"));
        if ($house) {
            if ($house->status == 2) {
                // hoouse is not booked
                try {
                    $service = \DB::transaction(function() use ($request, &$house) {
                        $service = Service::create([
                            "user_id" => Auth::user()->id,
                            "house_id" => $request->input('house_id')
                        ]);

                        $house->status = 3;
                        $house->save();

                        return $service;
                    });
                } catch(\Exception $e) {
                    \Log::error($e->getMessage());
                    return back()->withInput();
                }
                
                
                // save client's service and send email if payment was successful
                // redirect to display service 
                if ($service) {
                    try {
                        $amount = ((float)$house->housePrice * (float)\env("CHARGE_PERCENTAGE")) / 100;
                        $res = $this->sendPayment($amount, $service->id, $this->formatPhoneNumber($service->user->phoneNumber));
                        $res = $res["data"];
                        \Log::info("Payment status: " . $res->description);
                        if ($res->code == "200") {
                            Mail::to($service->user->email)->send(new makePayment());
                            return redirect()->route('user.services.index')->with("success", "Payment status: " . strtolower($res->description)
                        . ". Please make your payment in the next 3 minutes.");
                        }

                        return redirect()->route('user.services.index')->with("success", "Payment status: " . strtolower($res->description));
                    } catch(\Exception $e) {
                        \Log::error("There was an error sending payment.");
                        \Log::debug("Error details: " . $e->getMessage());
                        return redirect()->route('user.services.index')->with("success", "Payment request failed. Please wait 5 minutes and retry again.");
                    }
                } else {
                    // return to house form with errors
                    return back()->withErrors(['House Booking Failed. Please Contact Customer Care.']);
                }
            } else if ($house->status == 3) {
                // house booked
                return back()->withErrors(['House is already booked.']);
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $service)
    {
        //disaply house after was succesful
        $service = Service::find($service);
        if ($service) {
            if($service->user_id != Auth::user()->id) {
                abort(403);
            }
            // check if the service is not more than two days old.
            $current_timestamp = $_SERVER['REQUEST_TIME'];
            $latest_timestamp = strtotime($service->updated_at);
            $time_diff = $latest_timestamp + (2 * 24 * 60 * 60);
            if ($current_timestamp > $time_diff){
                // return service timed out error
                return view('services.timeout');
            }

            $house = House::find($service->house_id);

            if ($house->status != 3) {
                return view('services.timeout');
            }
            if ($service->payment_id) {
                $payment = Payment::find($service->payment_id);
                $data = [
                    "house" => $house,
                    "payment" => $payment
                ];
                $this->recordView($house->id);

                if ($house && $payment) {
                    return view('services.show', compact('data'));
                } else {
                    abort(403);
                }
            } else {
                // @todo redirect to payment page
                abort(403);
            }
        } else {
            // service does not exist
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service, $house_id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $service)
    {
        // perform refunding
        $service = Service::where([
            "id" => $service,
            "refunded" => 'false'
        ])->first();

        if ($service) {
            
            $oldHouse = House::find($service->house_id);

            if ($oldHouse->status != 3){
                // return service timed out error
                return view('services.timeout');
            }

            $newHouse = House::find($request->input('house_id'));
            if ($newHouse->housePrice > $oldHouse->housePrice) {
                return back()->withErrors(['This house has a different price range.']);
            }

            try {

                $update = \DB::transaction(function () use ($request, $service, $newHouse, $oldHouse) {
                    $oldHouse->status = 2;
                    $oldHouse->save();

                    $newHouse->status = 3;
                    $newHouse->save();

                    $update = Service::where('id', $service->id)->update([
                        "refunded" => "true",
                        "house_id" => $request->input("house_id")
                    ]);

                    return $update;

                });

            } catch (PDOException $e) {
                return back()->withErrors(['An error occurred. Please contact customer care.']);
            }

            
            if ($update) {
                Mail::to($service->house->user->email)->send(new HouseBookingMail(route('custom.service.show', $service->id)));
                Mail::to($service->user->email)->send(new HouseBookingMail(route('custom.service.show', $service->id)));
                return redirect()->route('custom.service.show', $service->id);
            }
        } else {
            return back()->withErrors(['House has already been refunded.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
    
    
    // this is the function called the payment api
    public function callback(Request $request) {
        $request->validate([
            "transactionId" => "transactionId",
            "paidAmount" => "required",
            "status" => "required",
            "statusDescription" => "required"
        ]);

        $payment_mode = \App\Payment_mode::where('name', 'MobileMoney')->first();

        if ($payment_mode){} else {
            $payment_mode = 1;
        }

        try {
            $payment = \DB::transaction(function() use ($request, $payment_mode) {
                $payment = Payment::create([
                    "spTransactionId" => $request->input("spTransactionId"),
                    "walletTransactionId" => $request->input("walletTransactionId"),
                    "chargedCommission" => $request->input("chargedCommission"),
                    "currency" => $request->input("currency"),
                    "amount" => $request->input("paidAmount"),
                    "transactionStatus" => $request->input("status"),
                    "transactionStatusDesc" => $request->input("statusDescription"),
                    "orderNumber" => $request->input("transactionId"),
                    "payment_mode" => $payment_mode
                ]);

                if ($request->input("transactionId") == "200") {
                    $service = Service::find($request->transactionId);
                    $service->payment_id = $payment->id;
                    $service->save();

                    Mail::to($service->house->user->email)->send(new HouseBookingMail(route('custom.service.show', $service->id)));
                    Mail::to($service->user->email)->send(new HouseBookingMail(route('custom.service.show', $service->id)));
                }

                return $payment;
            });
        } catch(\Exception $e) {
            \Log::error($e->getMessage());
        }
    }

    public function refund(Request $request, $house_id) {

        $services = Service::where('user_id', Auth::user()->id)
        ->orderBy('updated_at', 'desc')
        ->get();

        if ($services) {
            $data = [
                "services" => $services,
                "house_id" =>$house_id
            ];
            return view('services.refund', compact('data'));
        }else {
            return view('custom404');
        }

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
        $views = \App\View::where([
            'ip_address' => $ip,
            "house_id" => $id
        ])->orderBy('created_at', 'desc')->first();
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
            $view = \App\View::create([
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
