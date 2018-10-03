<?php

namespace App\Http\Controllers;

use App\Service;
use App\House;
use App\Payment;
use Illuminate\Support\Facades\Auth;

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
        $services = Service::all();
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
        $current_timestamp = $_SERVER['REQUEST_TIME'];
        $latest_timestamp = strtotime($service->updated_at);
        $time_diff = $latest_timestamp + (2 * 24 * 60 * 60);


        if ($current_timestamp > $time_diff) {
            try {
                $service = Service::create([
                    "email" => $request->input('email'),
                    "phone_number" => $request->input('phone'),
                    "house_id" => $request->input('house_id'),
                    "payment_id" => "100"
                ]);
            } catch(Exception $e) {
                return back()->withInput();
            }
            
            
            // save client's service and send email if payment was successful
            // redirect to display service 
            if ($service) {
                return redirect()->route('custom.service.preshow', $service->id);
            } else {
                // return to house form with errors
                return back()->withInput();
            }
        } else {
            return back()->withInput();
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
        $service = Service::where([
            "id" => $service,
            "email" => $request->input('email')
        ])->first();
        if ($service) {
            // check if the service is not more than two days old.
            $current_timestamp = $_SERVER['REQUEST_TIME'];
            $latest_timestamp = strtotime($service->updated_at);
            $time_diff = $latest_timestamp + (2 * 24 * 60 * 60);
            $time_diff = $latest_timestamp + (60 * 1);
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
                return redirect()->route('custom.service.preshow', $service->id);
            }
        } else {
            die("service not found");
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

    public function preshow($service) {
        $service = Service::find($service);
        if ($service) {
            // check if the service is not more than two days old.
            $current_timestamp = $_SERVER['REQUEST_TIME'];
            $latest_timestamp = strtotime($service->updated_at);
            $time_diff = $latest_timestamp + (2 * 24 * 60 * 60);
            
            if ($current_timestamp > $time_diff){
                return view('services.timeout');
            }
            $data = $service->id;
            return view('services.preshow', compact('data'));
        } else {
            return view('custom404');
        }
    }

    public function prerefund($house) {
        return view('services.prerefund', compact('house'));
    }

    public function refund(Request $request) {

        $services = Service::where('email', $request->input('email'))
        ->orderBy('updated_at', 'desc')
        ->get();

        if ($services) {
            $data = [
                "services" => $services,
                "house_id" =>$request->input('house_id')
            ];
            return view('services.refund', compact('data'));
        }else {
            return view('custom404');
        }

    }
}
