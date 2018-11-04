@extends('layouts.app')

@section('content')
<!-- new login -->

<div class="container-fluid" style=" margin-top: 90px; width:100vw; background-image: url(images/design/backgroundimage.jpg); background-position: cover; background-size: cover">
    <div class="card card-container" style="z-index: 0; color: black;">
        
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin"method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <span id="reauth-email" class="reauth-email"></span>

            <input style="z-index: 0;" type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif

            <input style="z-index: 0;" type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
            <div id="remember" class="checkbox">
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

                <input style="z-index: 0;" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
        </div>
        <button style="z-index: 0;" class="btn btn-lg btn-primary btn-block btn-signin" type="submit"> {{ __('Submit') }}</button>
    </form><!-- /form -->
    <a href="{{ route('password.request') }}" class="forgot-password">
        Forgot the password?
    </a>
</div><!-- /card-container -->
    </div><!-- /container -->
@endsection
