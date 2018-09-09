@extends('payments.layout')
@section('title', 'register payments')
@section('content')
 <h2 class="text-center">Make payments</h2>
 @foreach($errors->all() as $error)
     <p class="alert alert-info">{{ $error }}</p>
     @endforeach
 <form method="post">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="paymentId">Payment Id</label>
    <input type="text" class="form-control" id="paymentId" aria-describedby="paymentHelp" placeholder="Enter payment ID"
     name="paymentId">
  </div>
  <div class="form-group">
    <label for="paymentReference">paymentReference</label>
    <!-- <input type="text" class="form-control" id="serviceId" placeholder="paymentReference" name="paymentReference"> -->
    <select name="paymentReference" id="serviceId">
    <option value="monthly">monthly</option>
    <option value="weekly">weekly</option>
    <option value="daily">daily</option>
    </select>
  </div>

  <div class="form-group">
    <label for="cardNumber">cardNumber</label>
    <input type="text" class="form-control" id="serviceId" placeholder="cardNumber" name="cardNumber">
  </div>

  <div class="form-group">
    <label for="amount">amount</label>
    <input type="text" class="form-control" id="serviceId" placeholder="amount" name="amount">
  </div>

  <div class="form-group">
    <label for="transactionStatus">transactionStutatus</label>
    <input type="text" class="form-control" id="serviceId" placeholder="transaction Status" name="transactionStatus">
  </div>

  <div class="form-group">
    <label for="receiptNumber">Receipt Number</label>
    <input type="text" class="form-control" id="serviceId" placeholder="Receipt Number" name="receiptNumber">
  </div>

   <div class="form-group">
    <label for="cardExpireDate">expireDate</label>
    <input type="date" class="form-control" id="serviceId" placeholder="expire Date" name="cardExpireDate">
  </div>


<div class="form-group">
    <label for="orderNumber">orderNumber</label>
    <input type="text" class="form-control" id="serviceId" placeholder="orderNumber" name="orderNumber">
  </div>

  <div class="form-group">
    <label for="Payment_mode">Payment mode</label>
    <input type="text" class="form-control" id="serviceId" placeholder="orderNumber" name="Payment_mode">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection