@extends('layouts.app')

	<div class="container">
		<div class="card">
			<div class="container-fluid">
				<div class="wrapper row">
					<div class="preview col-md-6">

						<div class="preview-pic tab-content">
						
						@php 
							$i=1;
						@endphp
						@foreach($data["house"]->uploads as $upload)
						    <div class="tab-pane <?php echo ($i == 1) ? 'active' : '' ?>" id="pic-{{$i}}">
								<img src="/images/HouseUploads/{{ $upload->source }}" />
							</div>
							@php 
								$i++;
							@endphp
							@endforeach
							</div>
							<ul class="preview-thumbnail nav nav-tabs">
							@php 
								$y=1;
							@endphp
							@foreach($data["house"]->uploads as $upload)
							<li class="<?php echo ($y === 1) ? 'active' : '' ?>"><a data-target="#pic-{{$y}}" data-toggle="tab"><img src="/images/HouseUploads/{{ $upload->source }}" /></a></li>
							@php
								$y++;
							@endphp
							@endforeach
							</ul>
						

					</div>
					<div class="details col-md-6">
						<h3 class="product-title">Here is your house!</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">{{count($data['house']->views)}} Views</span>
						</div>
						<address>
							<strong>House Adress:{{$data["house"]->houseLocation}}</strong>
							<br>
							Cell: {{$data["house"]->cell}}<br>
							Sector: {{$data["house"]->sector->name}}<br>
							District: {{$data["house"]->district->name}}<br>
							Province: {{$data["house"]->province->name}}<br>
                            Country: {{$data["house"]->country->name}}<br>
							StreetCode: {{$data["house"]->streetCode}}<br>
							Number Of Rooms: {{$data["house"]->numberOfRooms}}<br>
							Width x Length: {{$data["house"]->width}} x {{$data["house"]->length}}<br>
							
							Water: @if($data["house"]->water == 1) Yes @else No @endif <br>
							Inside Bathroom: @if($data["house"]->bathroom == 1) Yes @else No @endif<br>
							Inside Toilet: @if($data["house"]->toilet == 1) Yes @else No @endif<br>
							Fenced: @if($data["house"]->fenced == 1) Yes @else No @endif<br>
							<br title="Phone">Phone Number (House Owner):</br> {{$data["house"]->user->phoneNumber}}
						</address>
						<!-- <h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5> -->
						<div class="action">
							<form>
							<input class="add-to-cart btn btn-default" type="button" value="View more houses" onclick="window.location.href='/'" />
							</form>



						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row-fluid">
		        <div class="span8">
                    @php
                        $lat_lng = explode(':', $data["house"]->houseLocation);
                        $lat = $lat_lng[0];
                        $lng = $lat_lng[1];

                    @endphp
		        	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q={{$lat}},{{$lng}}&hl=en;z=14&amp;output=embed"></iframe>
		    	</div>


		    </div>
	</div>
  </body>
</html>
