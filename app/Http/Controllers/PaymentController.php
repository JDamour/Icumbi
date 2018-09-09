<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $payments = Payments::all();
        return view('payments.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('payments.create');
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
        $name =$request->get('paymentId');
        
        $payments =new Payment(
        [
            'paymentId'=> $request->get('paymentId'),
            'paymentReference' =>$request->get('paymentReference'),
            'cardNumber'=>$request->get('cardNumber'),  
            'amount'=>$request->get('amount'),
            'orderNumber'=>$request->get('orderNumber'),    
            'payment_mode'=>$request->get('Payment_mode'),
            'transactionStatus'=>$request->get('transactionStatus'),
            'receiptNumber'=>$request->get('receiptNumber'),
            'cardExpireDate'=>$request->get('cardExpireDate'),
        ]
        );
        // dd($payments);
        $payments->save(); 
        return Redirect('/')->with('status', 'new payment Added :'.$name);
    }
    public function store1(Request $request)
    {
        //
        $name =$request->get('paymentModeId');
        //
        $paymentModes =new Payment_Mode(
        [
            'paymentModeId'=> $request->get('paymentModeId'),
            'name' =>$request->get('name')
        ]
        );
        // dd($payments);
        $paymentModes->save(); 
        return Redirect('/')->with('status', 'new payment Added :'.$name);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
