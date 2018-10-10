<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\mailNotification;
use Notification;
use App\User;
use App\Mail\SendContactEmail;
use Mail;
use App\Http\Requests\StoreContact;

class MailController extends Controller
{
    //

    public function sendNotification()
    {
        if(Auth::check())
        {
        $user=User::find(Auth::id());
        $user->notify(new mailNotification());
//            Notification::send($user, mailNotification());
        }
        else
        {
            Notification::route('mail', 'patrick1@gmail.com')
                ->notify(new MailNotification());
        }
        return 'notification sent';

    }
    public function ContactMail(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'message' => 'required'
            ]);

        $messages = [
            'firstName' => $request->get('fname'),
            'lastName' => $request->get('lname'),
            'email' => $request->get('email'),
            'message' => $request->get('message')
        ];

        Mail::to('mihigodieudo@gmail.com')->send(new SendContactEmail($messages));

   return redirect()->back()->with('success', 'Email successful send');
    }
}
