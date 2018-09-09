<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable =[
        'paymentId',
        'paymentReference',
        'cardNumber',
        'amount',
        'transactionStatus',
        'cardExpireDate',
        'receiptNumber',
        'payment_mode',
        'orderNumber'
    ];

    public function payment_mode(){
        return $this->belongsTo('App\Payment_mode');
    }

    public function service(){
        return $this->belongsTo('App\Service');
    }
}
