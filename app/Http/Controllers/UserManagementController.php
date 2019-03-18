<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $from = \date_format(date_sub(date_create(date('Y-m-d')), date_interval_create_from_date_string('7 days')), 'Y-m-d');
        $to = date('Y-m-d');
        $users = User::whereBetween('created_at', [$from, $to])->get()->sortByDesc('created_at');
        return view('users.index', compact('users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //
        $request->validate([
            "from" => "bail|required|date",
            "to" => "required|date"
        ]);
        $from = \date_format(\date_create($request->input('from')), 'Y-m-d');
        $to = \date_format(\date_create($request->input('to')), 'Y-m-d');

        $users = User::whereBetween('created_at', [$from, $to])->get()->sortByDesc('created_at');
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $phonePattern = '/\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*/';

        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone' => 'required|unique:users,phoneNumber|min:10|max:15|regex:' . $phonePattern,
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required'
        ]);

        $user = User::create([
            'firstName' => $request->get('fname'),
            'lastName' => $request->get('lname'),
            'phoneNumber' => $request->get('phone'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);

        if ($user) {
            $role = Role::find($request->get('role'));

            $user->assignRole($role);
    
            return back()->with('success', 'User created.');
        } else {
            return back()->withErrors(['User not created.']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        //
        $user = User::find($user);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        //
        $user = User::find($user);
        $roles = Role::all();
        $data = ['user' => $user, 'roles' => $roles];

        return view('users.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        //
        $phonePattern = '/\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*/';
        $user_id = $user;
        $user = User::find($user);
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
            $user = User::find($user_id);
            $role = Role::find($request->input('role'));

            $user->roles()->sync([$request->input('role')]);
    
            return back()->with('success', 'User updated.');
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
    public function destroy($user)
    {
        //
        if (Auth::id() == $user) {
            return back()->withErrors(['You can not delete yourself']);
        }
        $user = User::find($user);
        if ($user->delete()) {
            return redirect()->action('UserManagementController@index')->with('success', 'User deleted.');
        } else {
            return back()->withErrors(['User not deleted.']);
        }
    }
}
