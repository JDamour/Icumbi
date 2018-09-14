<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>chatroom</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>  
       <h1>chat rooms</h1>
   <div id="app">
<!--   <chat-log></chat-log>-->
  <chat-message></chat-message>
   <chat-composer></chat-composer>
   </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>