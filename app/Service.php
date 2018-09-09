<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'email',
        'phone_number',
        'house_id',
        'payment_id'
    ];
    
    public function house() {
        return $this->belongsTo('App\House');
    }
    
    public function payment() {
        return $this->hasOne('App\Payment');
    }
}
