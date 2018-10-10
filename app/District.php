<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $fillable = [
        'name',
        'province_id',
    ];
    public function sectors(){
        return $this->hasMany('App\Sector');
    }
    public function province(){
        return $this->belongsTo('App\Province');
    }
    public function houses()
    {
        return $this->hasMany('App\House');
    }
}
