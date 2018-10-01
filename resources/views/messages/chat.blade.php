@extends('layouts.master')
@section('title', 'add house')
@section('content')
    <div class="container">
        <div class="row" id="app">
            <div class="col-4 offset-4 col-sm-10 offset-sm-1">
                  <li class="list-group-item active">Chat room</li>
               <ul class="list-group" v-chat-scroll>
                 <message v-for="value,index in chat.message"
                  :key=value.index
                  :color=chat.color[index]
                  :user=chat.user[index]
                 >@{{value}}</message>
                </ul>
                  <input type="text" v-model='message' @keyup.enter="send()" placeholder="typing message ..." class="form-control">
            </div>
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
@endsection
