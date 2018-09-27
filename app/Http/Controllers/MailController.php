<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\mailNotification;
use Notification;
use App\User;

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
}
