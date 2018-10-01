@extends('client.layout')
@section('title', 'show House')
@section('content')
 <h2>Show house details</h2>
 <div class="card">
  <div class="card-header">
  The house number is {{ $house->id }}
  </div>
  <!-- <div class="card-body">
    <h3 class="card-title">{{ $house->houseLocation }}</h3>
    <h3 class="card-title">{{ $house->housePrice}}</h3>
    <h3 class="card-title">{{ $house->streetCode}}</h3>
    <h3 class="card-title">{{ $house->user_id}}</h3>
    <h3 class="card-title">{{ $house->paymentfrequency['name']}}</h3>
    <h3 class="card-title">{{ $house->cell_id}}</h3>
  </div>
</div> -->
<table style="border= 1px solid blue">
  <tr>
    <td>House Location</td>
    <td>{{ $house->houseLocation }}</td>
  </tr>
  <tr>
    <td>Amount</td>
    <td>{{ $house->housePrice}}/{{ $house->paymentfrequency['name']}}</td>
  </tr>
  <tr>
    <td>Address</td>
    <td>{{ $house->streetCode}}</td>
  </tr>
  <tr>
    <td>House Owner</td>
    <td>{{ $house->user_id}}</td>
  </tr>
  <tr>
    <td>Cell</td>
    <td>{{ $house->cell_id}}</td>
  </tr>
</table>
@endsection
