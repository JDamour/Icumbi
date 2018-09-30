@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style=" margin-top: 120px; background-color: #E5E7F9; margin-left: 50pt; margin-right: 50pt; margin-bottom: 100pt;>
            <div class="card">
                  <div class="panel-title text-center">
                    <img class="logo" src="https://9szsua.db.files.1drv.com/y4mu_9zQCPwwpmmZnCXJ7Oww61G5Gl-X3FMIhb4whIKRPjMCw6w2AjeUvq_oaaMXORWKQUeegf4DtebjDDk_0MnCgLj3EanYSKHZaUzowQLDhINnqgprTm2RYH8UT-_RXGi3OMxneHL_9roSyp6lSj56GsQUYXxxzSGyqirhXYUAnyns1ZU3ANqvivMVVERno6JPEl5U4bCJ_SRQ0dFVOQAyw?width=945&height=709&cropmode=none" width="200" height="100" style="border-radius: 50%; margin-bottom: -5px;"/>
                <h1 class="card-header">Login</h1>
                                        <hr />
                                    </div>
               <!--  <div class="card-header">{{ __('Login') }}</div>
 -->
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
