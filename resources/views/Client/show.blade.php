@extends('client.layout')
@section('title', 'show House')
@section('content')
 <h2>Show house details</h2>
 <div class="card">
  <div class="card-header">
  
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $house->houseLocation }}</h5>
    <p class="card-text">{{ $house->housePrice}}</p>
  </div>
</div>
@endsection