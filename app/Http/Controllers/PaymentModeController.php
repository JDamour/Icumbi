<?php

namespace App\Http\Controllers;

use App\Payment_mode;
use Illuminate\Http\Request;

class PaymentModeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pmodes = Payment_Mode::all();
        // dd(Payment_Mode::all());
        // return view('paymentModes.index')->with('paymentModes', $paymentModes);
         return view('paymentModes.index', compact('pmodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('paymentmodes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $name =$request->get('name');
    
        $paymentModes =new Payment_Mode(
        [
            'paymentModeId'=> $request->get('paymentModeId'),
            'name' =>$request->get('name')
        ]
        );
        // dd($paymentModes);
        $paymentModes->save(); 
        return Redirect('/')->with('status', 'new payment Added :'.$name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment_mode  $payment_mode
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_mode $paymentModeId)
    {
        //
        $pay = Payment_Mode::find($paymentModeId);
        
        return view('pmodes.show', compact('pay'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment_mode  $payment_mode
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_mode $payment_mode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment_mode  $payment_mode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment_mode $payment_mode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment_mode  $payment_mode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment_mode $paymentModeId)
    {
        //
        $pay = Payment_Mode::find($paymentModeId);
        $pay->delete();
        
         return Redirect('/')->with('status', ' item deleted id:'.$id);
    }
}
