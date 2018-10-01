<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\SendMessage;
use App\User;
use App\Events\ChatEvent;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function chat()
    {
        return view('messages.chat');
    }

        public function send(request $request)
    {

        $user = User::find(Auth::id());
        event(new ChatEvent($request->message, $user));
    }


//    public function send()
//    {
//        $message = 'hello daff';
//        $user = User::find(Auth::id());
//        event(new ChatEvent($message, $user));
//    }
//




    public function create()
    {
        //
//        return view('messages.create');
        return view('messages.chat');
    }
     public function saveMessage(Request $request)
    {
         if(Auth::check())
         {
            $message = Message::create(
                [
                         'message'=> $request->get('message'),
                         'houseOwnerId' => Auth::user()->id,
                         'administratorId' =>6,
                ]

                );
                $message->save();
         event(new SendMessage($message));        
        return redirect()->back()->with('success', 'message sent');
         }
         

    }


}
