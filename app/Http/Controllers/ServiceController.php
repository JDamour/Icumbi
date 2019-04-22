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
                            "house_id" => $request->input('house_id'),
                            "payment_id" => "100"
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
                    Mail::to($service->house->user->email)->send(new HouseBookingMail(route('custom.service.show', $service->id)));
                    Mail::to($service->user->email)->send(new HouseBookingMail(route('custom.service.show', $service->id)));
                    return redirect()->route('custom.service.show', $service->id);
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
            // if ($service->payment_id) {
                //$payment = Payment::find($service->payment_id);
                $data = [
                    "house" => $house //,
                    // "payment" => $payment
                ];
                $this->recordView($house->id);

                if ($house /*&& $payment*/) {
                    return view('services.show', compact('data'));
                }
            // } else {
            //     // @todo redirect to payment page
            // }
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
    public function callback(Request $request, Service $service) {
        // need to check payment api workings
        // @todo insert payment details in the database
        // @todo update service table add payment id
        // @todo send email to client and show payment status to client
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
}
