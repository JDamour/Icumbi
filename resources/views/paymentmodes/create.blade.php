@extends('payments.layout')
@section('title', 'register payments')
@section('content')
 <h2 class="text-center">Register Payment Modes</h2>

 @foreach($errors->all() as $error)
     <p class="alert alert-info">{{ $error }}</p>
     @endforeach

 <form method="post">
 
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="paymentModeId">Payment Mode Id</label>
      <input type="text" class="form-control" id="paymentId" aria-describedby="paymentHelp" placeholder="Enter payment Mode Id"
      name="paymentModeId">
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="serviceId" placeholder="Enter Name" name="name">
      
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection