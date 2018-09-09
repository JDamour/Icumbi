<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'password',
        'phoneNumber', 'gender', 'dateOfBirth',
        'accountConfirmationCode', 'amount', 'roleId',
        'createdBy', 'updatedBy', 'email', 'national_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
     public function role() {
        return $this->belongsTo('App\Role');
    }
    public function messagesHouseOwner()
    {
        return $this->hasMany('App\Message', 'houseOwnerId');
    }

    public function messagesAdmin() {
        return $this->hasMany('App\Message', 'administratorId');
    }

    public function house()
    {
        return $this->hasMany('App\House');
    }

    // public function messages() {
    //     if ($this->messagesAdmin->id == $this->id) {
    //         return $this->messagesAdmin;
    //     }
    //     return $this->messagesHouseOwner;
    // }
    
}
