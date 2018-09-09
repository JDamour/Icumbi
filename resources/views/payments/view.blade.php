@extends('payments.layout')
@section('title', 'list of payments')
@section('content')
<br>
 <h2 class="text-center">view list of payments</h2>
 <br>
 @if($payments->isEmpty())    
     <p class="alert alert-info">no payments made</p>
     
     @else   
     
      @if(session('status'))
          <p class="alert alert-success"> {{ session('status') }}</p> 
          @endif
 <br>
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Payment id</th>
      <th scope="col">payment reference</th>
      <th scope="col">card number</th>
      <th scope="col">receipt number</th>
      <th scope="col">card expire date</th>
      <th scope="col">order number</th>
      <th scope="col">payment mode</th>
    </tr>
  </thead>
  <tbody>
   @foreach($payments as $payment)
    <tr>
      <th scope="row">{{ $payment->paymentId }}</th>
      <td>
      <a href="{{ action('PaymentsController@show', $payment->id ) }}" class="btn-link">{{ $payment->paymentReference }}</a></td>
      <td>{{ $payment->cardNumber }}</td>
      <td>{{ $payment->amount }}</td>
      <td>{{ $payment->transactionStatus }}</td>
      <td>{{ $payment->receiptNumber }}</td>
      <td>{{ $payment->cardExpireDate }}</td>
      <td>{{ $payment->orderNumber }}</td>
      <td>{{ $payment->payment_mode }}</td>
      <!-- <td>{{ $payment->amount }}</td> -->
      <td>
          <a href="#" class="btn btn-warning">edit</a>
          <a href="{{ action('PaymentsController@destroy', $payment->id) }}" class="btn btn-danger">delete</a>
      </td>
    </tr>
@endforeach
</table>

@endif

@endsection