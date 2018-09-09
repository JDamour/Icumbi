<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymentfrequency extends Model
{
    //
    protected $table = "paymentfrequency";
    protected $fillable = [
        'name',
    ];
    public function house()
    {
        return $this->hasMany('App\House');
    }

}
