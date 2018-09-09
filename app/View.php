<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    //
    protected $fillable = [
        'ip_address',
        'house_id'
    ];
    
    public function house() {
        return $this->belongsTo('App\House');
    }
}
