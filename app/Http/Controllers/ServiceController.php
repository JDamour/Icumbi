<?php

namespace App\Http\Controllers;

use App\Service;
use App\House;
use App\Payment;
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
        $services = Service::all()->sortByDesc('created_at');
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
        // show service payment form
        $service = Service::where('house_id', $house_id)
            ->orderBy('updated_at', 'desc')
            ->first();

        if ($service) {
            $current_timestamp = $_SERVER['REQUEST_TIME'];
            $latest_timestamp = strtotime($service->updated_at);
            $time_diff = $latest_timestamp + (2 * 24 * 60 * 60);
            if ($current_timestamp > $time_diff) {
                $data = [
                    "house_id" => $house_id,
                    "booked" => false
                ];
                return view('services.create', compact('data'));
            } else {
                $data = [
                    "house_id" => $house_id,
                    "booked" => true
                ];
                return view('services.create', compact('data'));
            }

        } else {
            $data = [
                "house_id" => $house_id,
                "booked" => false
            ];
            return view('services.create', compact('data'));
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
        // record client details
        $service = Service::where('house_id', $request->input('house_id'))
            ->orderBy('updated_at', 'desc')
            ->first();

        if ($service) {
            $current_timestamp = $_SERVER['REQUEST_TIME'];
            $latest_timestamp = strtotime($service->updated_at);
            $time_diff = $latest_timestamp + (2 * 24 * 60 * 60);


            if ($current_timestamp > $time_diff) {
                try {
                    $service = Service::create([
                        "user_id" => Auth::user()->id,
                        "house_id" => $request->input('house_id'),
                        "payment_id" => "100"
                    ]);
                } catch(Exception $e) {
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
                    return back()->withErrors(['House Booking Failed. Contact customer care.']);
                }
            } else {
                return back()->withErrors(['House is already booked.']);
            }
        } else {
            try {
                $service = Service::create([
                    "user_id" => Auth::user()->id,
                    "house_id" => $request->input('house_id'),
                    "payment_id" => "100"
                ]);
            } catch(Exception $e) {
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
            // check if the service is not more than two days old.
            $current_timestamp = $_SERVER['REQUEST_TIME'];
            $latest_timestamp = strtotime($service->updated_at);
            $time_diff = $latest_timestamp + (2 * 24 * 60 * 60);
            if ($current_timestamp > $time_diff){
                // return service timed out error
                return view('services.timeout');
            }
            // if ($service->payment_id) {

                $house = House::find($service->house_id);
                //$payment = Payment::find($service->payment_id);
                $data = [
                    "house" => $house //,
                    // "payment" => $payment
                ];

                if ($house /*&& $payment*/) {
                    return view('services.show', compact('data'));
                }
            // } else {
            //     // @todo redirect to payment page
            // }
        }
        
        // @todo show error page
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
            
            // check if the service is not more than two days old.
            $current_timestamp = $_SERVER['REQUEST_TIME'];
            $latest_timestamp = strtotime($service->updated_at);
            $time_diff = $latest_timestamp + (2 * 24 * 60 * 60);

            if ($current_timestamp > $time_diff){
                // return service timed out error
                return view('services.timeout');
            }
            
            if ($service->refunded == false) {
                return view('custom404');
            }

            $update = Service::where('id', $service->id)->update([
                "refunded" => "true",
                "house_id" => $request->input("house_id")
            ]);
            if ($update) {
                Mail::to($service->house->user->email)->send(new HouseBookingMail(route('custom.service.show', $service->id)));
                Mail::to($service->user->email)->send(new HouseBookingMail(route('custom.service.show', $service->id)));
                return redirect()->route('custom.service.show', $service->id);
            }
        } else {
            return view('custom404');
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
}
