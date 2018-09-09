<!--@extends('paymentmodes.layout')
@section('title', 'view Payment modes')
@section('content')
<br>
 <h2 class="text-center">view List of paymentmodes</h2>
 <br>
 @if($pmodes->isEmpty())    
     <p class="alert alert-info">no paymentmodes registered</p>
     
     @else   
     
      @if(session('status'))
          <p class="alert alert-success"> {{ session('status') }}</p> 
          @endif
 <br>
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Payment Mode Id</th>
      <th scope="col">Payment Name</th>
    </tr>
  </thead>
  <tbody>
   @foreach($pmodes as $paymentmode)
    <tr>
      <!-- <th scope="row">{{ $pmodes->paymentModeId }}</th> -->
      <th scope="row">{{ $paymentmode['id'] }}</th>
      <td>
      <!-- <a href="{{!! action('Payment_ModeController@show', $paymentModes->paymentModeId ) !!}}" class="btn-link">{{ $paymentModes->name }}</a></td> -->
       <td>{{ $paymentmode->name }}</td>
      <!--<td>{{ $paymentModes->description }}</td> --><!--
      <td>
          <a href="#" class="btn btn-warning">edit</a>
          <a href="{{ action('Payment_ModeController@destroy', $paymentModes->paymentModeId) }}" class="btn btn-danger">delete</a>
      </td>
    </tr>
@endforeach
</table>

@endif

@endsection-->

@extends('paymentmodes.layout')
@section('title', 'View all payment modes')
@section('content')
<div class="container col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">
<h2> Paymodes </h2>
</div>
@if ($pmodes->isEmpty())
<p> There is payment modes registered.</p>
@else
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Title</th>
<th>Status</th>
</tr>
</thead>
<tbody>
@foreach($pmodes as $pmode)
<tr>
<td>{!! $pmode->id !!} </td>
<td>{!! $ticpmodeket->title !!}</td>
<td>{!! $ticpmodeket->status ? 'Pending' : 'Answe\
red' !!}</td>
</tr>
@endforeach
</tbody>
</table>
@endif
</div>
</div>
@endsection
We perform the following steps to load the tickets:
@if ($tickets->isEmpty())
<p> There is no ticket.</p>
@else
First, we check if the $tickets variable is empty or not. If it’s empty, then we display a message to
our users.
@else
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Title</th>
<th>Status</th>
</tr>
</thead>
<tbody>
@foreach($tickets as $ticket)
<tr>
<td>{!! $ticket->id !!} </td>
<td>{!! $ticket->title !!}</td>
<td>{!! $ticket->status ? 'Pending' : 'Answered' !!}</td>
</tr>
@endforeach
</tbody>
</table>
@endif