<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
     protected $fillable = [
         'message',
         'houseOwnerId',
         'adminstratorId'
     ];
    
    public function user()
    {
        return $this->belongTo('App\User');
    }
}
         