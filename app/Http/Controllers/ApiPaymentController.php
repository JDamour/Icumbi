<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\RestCurl;

class ApiPaymentController extends Controller
{
    public function postRemoteData(){
         $response= RestCurl::post(
             'https://opay-api.oltranz.com/opay/paymentrequest',  [
                    'telephoneNumber' => '250782174233', // iyi ni number yumukiriya ugiye kwishyura
                    'amount' => 50.0, //cash agiye kwishyurwa
                    'organizationId' => '', // merchantId yacu
                    'description' => 'Payment for booking house services', // description
                    'callbackUrl' => 'http://127.0.0.1:8000/api/payment/callback', //redirect Url
                    'transactionId' => '00003', // iyi ni id transaction yacu ya payment
                ]);
      /*  "data" => {#444 ▼
      *      +"code": "200"
     *       +"description": "PAYMENT REQUEST SUCCESSFULLY SENT TO MTN MOBILE MONEY.
    *       ONCE THE PAYMENT IS DONE YOU WILL RECEIVE PAYMENT NOTIFICATION DIRECTLY
   *        IN YOUR SYSTEM"
   *        +"body": {#439 ▼
  *             +"transactionId": "15637ec32ed34ae6b709cb9294e7c8a4"
   * }
   * +"status": "PENDING"
  } */
//      sleep(15);
        dd($response);
        getRemoteData($response);
    }
     public function getRemoteData($response){


        dd($response);
    }
}
