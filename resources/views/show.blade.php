
@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Vasskertentrance.jpg" /></div>
						  <div class="tab-pane" id="pic-2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTklPtHzpvHSDudP2ylwvhFRZdWxrYsVaUVWDyEYqHB0CEha6wX" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://alyssachia.info/wp-content/uploads/2017/11/big-nice-houses-best-25-nice-houses-ideas-on-pinterest-dream-houses-nice-big.jpg" /></div>
						  <div class="tab-pane" id="pic-4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgA1h2JI8EBjH3yr9tCMREPDYsqbyluKlc23B5ishk65UVhcN9fQ" /></div>
						  <div class="tab-pane" id="pic-5"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfabSsuuqJy1_9yZp2rF2bFBOEWB-tljIDtPqKiW03XZR7haHCzQ" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Vasskertentrance.jpg" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTklPtHzpvHSDudP2ylwvhFRZdWxrYsVaUVWDyEYqHB0CEha6wX" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://alyssachia.info/wp-content/uploads/2017/11/big-nice-houses-best-25-nice-houses-ideas-on-pinterest-dream-houses-nice-big.jpg" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgA1h2JI8EBjH3yr9tCMREPDYsqbyluKlc23B5ishk65UVhcN9fQ" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfabSsuuqJy1_9yZp2rF2bFBOEWB-tljIDtPqKiW03XZR7haHCzQ" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">House</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
						<h4 class="price">Price: <span>RWF 500, 000</span></h4>
						<p class="vote"><strong>91%</strong> liked this house! <strong>(87 votes)</strong></p>
						
						<div class="action">
							<form>
							<input class="add-to-cart btn btn-default" type="button" value="Request House Adress" onclick="window.location.href='/form'" />
							</form>
							
							



			<span id="reauth-email" class="reauth-email"></span>
			<input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" action="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>

			@if ($errors->has('email'))
			<span class="invalid-feedback" role="alert">
				<strong>{{ $errors->first('email') }}</strong>
			</span>
			@endif

			<input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" action="{{ __('Password') }}" placeholder="Password" required>
			<div id="remember" class="checkbox">
				@if ($errors->has('password'))
				<span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('password') }}</strong>
				</span>
				@endif

				<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
		</div>

		<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"> {{ __('Submit') }}</button>
	</form><!-- /form -->
	<a href="{{ route('password.request') }}" class="forgot-password">
		Forgot the password?
	</a>
</div><!-- /card-container -->
    </div><!-- /container -->

	</div>
	@endsection

