<?php

namespace App\Http\Controllers;

use App\Service;
use App\House;
use App\Payment;

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
        // view all service; meant for system admins only
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($house_id)
    {
        // show service payment form
        return view('services.create', compact('house_id'));
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
        // die(json_encode($request));
        // die($request->input('email') . $request->input('phone') . $request->input('house_id'));
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
            die("service was saved");
        } else {
            // return to house form with errors
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //disaply house after was succesful
        $service = Service::find($service->id);
        if ($service) {
            // check if the service is not more than two days old.
            $current_timestamp = $_SERVER['REQUEST_TIME'];
            $latest_timestamp = strtotime($service->updated_at);
            $time_diff = $latest_timestamp + (60 * 60 * 24 * 2);
            if ($current_timestamp < $time_diff){
                // @todo return service timed out error
                return redirect()->route('root');
                return;
            }
            if ($service->payment_id) {
                $house = House::find($service->house_id);
                $payment = Payment::find($service->payment_id);
                $data = [
                    "house" => $house,
                    "payment" => $payment
                ];
                if ($house && $payment) {
                    return view('services.show', compact('data'));
                }
            } else {
                // @todo redirect to payment page
            }
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
    public function update(Request $request, Service $service)
    {
        // perform refunding
        $service = Service::find($service->id);
        if ($service) {
            
            // check if the service is not more than two days old
            $current_timestamp = $_SERVER['REQUEST_TIME'];
            $latest_timestamp = strtotime($service->updated_at);
            $time_diff = $latest_timestamp + (60 * 60 * 24 * 2);
            if ($current_timestamp < $time_diff){
                // @todo return service timed out error
                return;
            }
            if (!$service->refunded) {
               $update = $service->update([
                    "refunded" => "true",
                    "house_id" => $request->input("house_id")
                ]);
                if ($update) {
                    
                }
            }
        }
        
        // @todo display error message
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
}
