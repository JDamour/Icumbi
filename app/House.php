<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //
     protected $fillable = [
        'houseLocation',
        'housePrice',
        'streetCode',
        'user_id',
        'numberOfRooms',
        'fenced',
        'bathroom',
        'toilet',
        'length',
        'width',
        'water',
        'paymentfrequency_id',

        //  the atributes below  are foreign kies from other tables
        'country_id',
        'province_id',
        'district_id',
        'sector_id',
        'cell'
        

    ];
    public function reports()
    {
        return $this->hasMany('App\Report');
    }

    public function service()
    {
        return $this->hasMany('App\Service');
    }
    public function uploads()
    {
        return $this->hasMany('App\Uploads');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    public function district()
    {
        return $this->belongsTo('App\District');
    }
    public function province()
    {
        return $this->belongsTo('App\Province');
    }
    public function sector()
    {
        return $this->belongsTo('App\Sector');
    }

    public function paymentfrequency()
    {
        return $this->belongsTo('App\Paymentfrequency');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
