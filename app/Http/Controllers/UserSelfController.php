<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserSelfController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return redirect()->action('UserSelfController@show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $user = Auth::user();

        return view('self.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        $user = Auth::user();
        $data = ['user' => $user];

        return view('self.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $phonePattern = '/\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*/';
        $user_id = Auth::id();
        $user = Auth::user();
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone' => 'required|unique:users,phoneNumber,'.$user->id.'|min:10|max:15|regex:' . $phonePattern,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required'
        ]);

        $user = User::where('id', $user->id)->update([
            'firstName' => $request->input('fname'),
            'lastName' => $request->input('lname'),
            'phoneNumber' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        if ($user) {
            $user = Auth::user();
            switch($request->input('role'))
            {
                case 'Owner':
                    $role = Role::where('name', 'Owner')->first();
                    break;
                default:
                    $role = Role::where('name', 'User')->first();
            }
            // $user->assignRole($role);
            // $role = Role::find($request->input('role'));

            $user->roles()->sync($role);
    
            return redirect()->action('UserSelfController@show')->with('success', 'User updated.');
        } else {
            return back()->withErrors(['User not updated.']);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        
        $user = Auth::user();
        if ($user->delete()) {
            Auth::logout();
            return redirect()->route('login')->with('success', 'User deleted.');
        } else {
            return back()->withErrors(['User not deleted.']);
        }
    }
}