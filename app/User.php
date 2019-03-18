<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

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
    
     public function roles()
     {
         return $this->belongsToMany('App\Role', 'role_user');
     }

     public function assignRole($role)
        {
            return $this->roles()->attach($role);
        }
    //get user role by name
        public function isAdmin()
        {
            foreach ($this->roles()->get() as $role)
            {
                if ($role->name == 'Admin')
                {
                    return true;
                }
            }
        }
    // get user role by id
//        public function isAdmin()
//    {
//       return $this->roles()->where('role_id', 1)->first();
////       return in_array(1, $this->roles()->pluck('role_id')->all());
//    }

        //get user role by name
        public function isOwner()
        {
            foreach ($this->roles()->get() as $role)
            {
                if ($role->name == 'Owner')
                {
                    return true;
                }
            }
        }
    // get user role by id
//        public function isOwner()
//    {
//       return $this->roles()->where('role_id', 2)->first();
////       return in_array(2, $this->roles()->pluck('role_id')->all());
//    }
            //get user role by name
        public function isUser()
        {
            foreach ($this->roles()->get() as $role)
            {
                if ($role->name == 'User')
                {
                    return true;
                }
            }
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
        return $this->hasMany('App\House')->orderByDesc('created_at');
    }
    public function services()
    {
        return $this->hasMany('App\Service')->orderByDesc('created_at');
    }

    // public function messages() {
    //     if ($this->messagesAdmin->id == $this->id) {
    //         return $this->messagesAdmin;
    //     }
    //     return $this->messagesHouseOwner;
    // }
    
}
