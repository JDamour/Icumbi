@extends('layouts.app')

@section('content')
<div class="container-fluid" style=" margin-top: 100px; width:100vw; background-image: url(https://www.wspa.co.uk/wp-content/uploads/2015/04/wspa-home-background-2-1484x989.jpg); background-position: cover; background-size: cover">

            <div class="row main">
                <div class="main-login main-center">

        <form class="form-horizontal" method="post" action="{{ route('register') }}">
                       @csrf
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">{{ __('First Name') }}</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" id="firstName"  placeholder="Your first Name"
                                    value="{{ old('firstName') }}" required autofocus/>
                                </div>
                                 @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">{{ __('Last Name') }}</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" id="lastName"  placeholder="Your last Name" value="{{ old('lastName') }}" required autofocus/>
                                 </div>
                                 @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">{{ __('Role') }}</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <select id="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}" name="roleId" value="{{ old('role') }}"
                                                                     required autofocus>
                                                                    <option value="">Role</option>
                                                                    <option value="123">User</option>
                                                                    <option value="Owner">House Owner</option>
                                    </select>

                                </div>
                                @if ($errors->has('role'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">{{ __('E-Mail') }}</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email"  placeholder="Your Email"value="{{ old('email') }}" required>


                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="cols-sm-2 control-label required">{{ __('Phone Number') }}</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile aria-hidden='true'"></i>
                                    </span>
                                    <input type="text" class="form-control{{ $errors->has('phoneNumber') ? ' is-invalid' : '' }}" name="phoneNumber" id="mobile"  placeholder="Your Mobile"value="{{ old('phoneNumber') }}" required autofocus>

                                </div>

                                @if ($errors->has('phoneNumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="cols-sm-2 control-label required">{{ __('Date') }}</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar aria-hidden='true'"></i></span>
                                    <input type="date" class="form-control{{ $errors->has('Date Of Birth') ? ' is-invalid' : '' }}" name="dateOfBirth" id="dateOfBirth"  placeholder="Your birth Date"value="{{ old('dateOfBirth') }}" required autofocus>

                                </div>

                                @if ($errors->has('dateOfBirth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dateOfBirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">{{ __('Password') }}</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password"  placeholder="Type your password"required>
                                </div>
                                 @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">{{ __('Confirm Password') }}</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password_confirmation" id="name"  placeholder="Confirm your password" required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                           <button type="submit" class="btn btn-lg btn-primary btn-block btn-signin">{{ __('Register') }}</button>
                        </div>

                    </form>
                   </div>
        </div>
</div>
@endsection
