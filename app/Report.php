<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $fillable = [
        'email', 
        'description',
        'house_id'
    ];
    
    public function house()
        {
            return $this->belongTo('App\House');
        }
}
 

