@extends('layouts.app')

	<div class="container">
		<div class="card">
			<div class="container-fluid">
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
						<h3 class="product-title">Here is your house!</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 views</span>
						</div>
						<address>
							<strong>House Adress:</strong>
							<br>
							{{$data["house"]->cell->name}}<br>
							{{$data["house"]->cell->sector->name}}<br>
							{{$data["house"]->cell->sector->district->name}}<br>
							{{$data["house"]->cell->sector->district->province->name}}<br>
                            {{$data["house"]->cell->sector->district->province->country->name}}<br>
							{{$data["house"]->streetCode}}<br>
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
