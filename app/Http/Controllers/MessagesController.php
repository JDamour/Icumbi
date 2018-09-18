<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\SendMessage;

class MessagesController extends Controller
{
    public function create()
    {
        //
        return view('messages.create');
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
