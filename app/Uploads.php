<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    //
     protected $fillable = [
        'name',
        'title',
        'source',
        'house_id',
    ];

    public function house()
    {
        return $this->belongsTo('App\House');
    }
}
