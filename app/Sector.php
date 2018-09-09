<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    //
    protected $fillable =[
        'name',
        'district_id'
    ];
    public function cells(){
        return $this->hasMany('App\Cell');
    }
    public function district(){
        return $this->belongsTo('App\District');
    }
}
