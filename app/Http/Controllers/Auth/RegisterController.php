<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

     public function redirectTo(){

    // User role


    // Check user role
    if(Auth()->user()->isAdmin())
         {
            return '/admin/houses';
         }

     elseif(Auth()->user()->isOwner())
          {
            return '/owner/houses';
          }
     else
          return '/';
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
//        $phonePattern = '/\b\d{3}[-.]?\d{3}[-.]?\d{4}\b/';
         $phonePattern = '/\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*/';

        return Validator::make($data, [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'phoneNumber' => 'required|unique:users|min:10|max:15|regex:' . $phonePattern,
//            'phoneNumber'=> 'required|numeric|min:10|unique:users||size:11',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'roleId' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'phoneNumber' => $data['phoneNumber'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        switch($data['roleId'])
        {
            case 'Admin':
                $role = Role::where('name', 'Admin')->first();
                break;
            case 'Owner':
                $role = Role::where('name', 'Owner')->first();
                break;
            default:
                $role = Role::where('name', 'User')->first();
        }
        $user->assignRole($role);
        return $user;
    }
}
