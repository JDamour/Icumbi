@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card" style=" margin-top: 150px; background-color: #E5E7F9; margin-left: 50pt; margin-right: 50pt; margin-bottom: 100pt;">
    <img class="logo" src="https://9szsua.db.files.1drv.com/y4mu_9zQCPwwpmmZnCXJ7Oww61G5Gl-X3FMIhb4whIKRPjMCw6w2AjeUvq_oaaMXORWKQUeegf4DtebjDDk_0MnCgLj3EanYSKHZaUzowQLDhINnqgprTm2RYH8UT-_RXGi3OMxneHL_9roSyp6lSj56GsQUYXxxzSGyqirhXYUAnyns1ZU3ANqvivMVVERno6JPEl5U4bCJ_SRQ0dFVOQAyw?width=945&height=709&cropmode=none" width="200" height="100" style="border-radius: 50%; margin-bottom: -5px;"/>
    <!--  <div class="card-header" style="margin-top: -20px">{{ __('Register') }}</div> -->
    <div class="panel-title text-center">
     <h1 class="card-header">Register</h1>
     <hr />
    </div>
        
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('firstName') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('lastName') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        
                         <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('gender') }}</label>

                            <div class="col-md-6">
                                <select id="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}"
                                 required autofocus>
                                <option value="">Gender</option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        
                         <div class="form-group row">
                            <label for="dateOfBirth" class="col-md-4 col-form-label text-md-right">{{ __('date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dateOfBirth" type="date" class="form-control{{ $errors->has('dateOfBirth') ? ' is-invalid' : '' }}" name="dateOfBirth" value="{{ old('dateOfBirth') }}" required autofocus>

                                @if ($errors->has('dateOfBirth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dateOfBirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="national_id" class="col-md-4 col-form-label text-md-right">{{ __('national_id') }}</label>

                            <div class="col-md-6">
                                <input id="national_id" type="text" class="form-control{{ $errors->has('national_id') ? ' is-invalid' : '' }}" name="national_id" value="{{ old('national_id') }}" required autofocus>

                                @if ($errors->has('national_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('national_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                 
 
                         <div class="form-group row">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('phoneNumber') }}</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="text" class="form-control{{ $errors->has('phoneNumber') ? ' is-invalid' : '' }}" name="phoneNumber" value="{{ old('phoneNumber') }}" required autofocus>

                                @if ($errors->has('phoneNumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                 

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>    
     </div>
    </div>
   </div>
  </div>
@endsection

