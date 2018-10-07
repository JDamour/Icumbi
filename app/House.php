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
        'fanced',
        'bathRoomInside',
        'toiletInside',
        'length',
        'width',
        'water',
        'paymentfrequency_id',
        'cell_id'

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

    public function cell()
    {
        return $this->belongsTo('App\Cell');
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
