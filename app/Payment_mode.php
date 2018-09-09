<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_mode extends Model
{
    //
    protected $fillable =[
        'paymentModeId',
        'name'
    ];

    public function payments(){
        return $this->hasMany('App\Payment');
    }
}
