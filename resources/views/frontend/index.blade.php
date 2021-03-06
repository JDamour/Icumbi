@extends('layouts.frontend')
@section('title', 'Home')
@section('content')
  <section class="probootstrap-slider flexslider">
    <div class="probootstrap-wrap-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">

            <div class="probootstrap-home-search probootstrap-animate">
              <form action="/search" method="POST" role="search">
                <h2 class="heading">Search your next dream home here</h2>
                <div class="probootstrap-field-group">
                  <div class="probootstrap-fields">
                    
                    <div class="search-field">
                      <i class="icon-location2"></i>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="text" class="form-control" placeholder="Enter address, ZIP code, Neighborhoods" name="search">
                    </div>
                    <div class="search-category">
                      <i class="icon-chevron-down"></i>
                      <select name="#" id="" class="form-control">
                        <option value="">For Rent</option>
                        <option value="">For Sale</option>
                      </select>
                    </div>
                  </div>
                  <button class="btn btn-success" type="submit"><i class="icon-magnifying-glass t2"></i> Start Search</button>
                </div>
              </form>
              
             <!--  <p class="mb0 text-left"><small>A free HTML5 template by <a href="https://uicookies.com/">uicookies.com</a> under license <a href="https://uicookies.com/license">Creative Commons 3.0</a></small> </p> -->
            </div>

          </div>
        </div>
      </div>
    </div>
    <ul class="slides">
      <li style="background-image: url(https://kafgw.com/wp-content/uploads/home-buying-big-houses-making-comeback_535580.jpg); opacity:1;"></li>
      <li style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS41gD1AzskrBe56NsrakcQlzalS2_tFRoa_tm-BNxuZcwWEzgIkg);"></li>
      <li style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR58xeOdRxzZwGfofxuDbqrEUSCUoFT5flWSLLUnD6sjeYzkwmP);"></li>
    </ul>
  </section>
  <!-- END: slider  -->

  <section class="probootstrap-section probootstrap-section-lighter">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="probootstrap-card text-center probootstrap-animate">
            <div class="probootstrap-card-media svg-sm colored">
              <img src="img/flaticon/svg/001-prize.svg" class="svg" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading">Award Winning Brooker</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#">Find out more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="probootstrap-card text-center probootstrap-animate">
            <div class="probootstrap-card-media svg-sm colored">
              <img src="img/flaticon/svg/005-new.svg" class="svg" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading">New Houses</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#">Find out more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="probootstrap-card text-center  probootstrap-animate">
            <div class="probootstrap-card-media svg-sm colored">
              <img src="img/flaticon/svg/006-coin.svg" class="svg" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading">Affordable Houses</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#">Find out more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END: section -->

  <section class="probootstrap-section">
    <div class="container">
      <div class="row heading">
        <h2 class="mt0 mb50 text-center">Explore Our Neighborhoods</h2>
      </div>
      <div class="row probootstrap-gutter10">
        <div class="col-md-6 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
            <img src="https://kafgw.com/wp-content/uploads/home-buying-big-houses-making-comeback_535580.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>Kigali City</h3>
              <p>430 Properties</p>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
             <img src="https://uicookies.com/demo/theme/haus/img/slider_1.jpg" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>Western Province</h3>
              <p>294 Properties</p>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
            <img src="https://uicookies.com/demo/theme/haus/img/slider_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>Northern Province</h3>
              <p>300 Properties</p>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
            <img src="https://uicookies.com/demo/theme/haus/img/slider_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>Eastern Province</h3>
              <p>268 Properties</p>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
            <img src="https://uicookies.com/demo/theme/haus/img/slider_4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>Southern Province</h3>
              <p>342 Properties</p>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>
  <!-- END: section -->

  <section class="probootstrap-section probootstrap-bg" style="background-image: url(http://petspokane.org/wp-content/uploads/2018/06/24-best-modern-houses-with-curb-appeal-architecture-house-plans-3.jpg);">
    <div class="container text-center probootstrap-animate" data-animate-effect="fadeIn">
      <h2 class="heading">Best Home &amp; Properties</h2>
      <p class="sub-heading">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      <p><a href="#" class="btn btn-primary mb10">Find out more</a></p>
    </div>
  </section>
  <!-- END: section -->

  <section class="probootstrap-section probootstrap-section-lighter">
    <div class="container">
      <div class="row heading">
        <h2 class="mt0 mb50 text-center">Featured Listing</h2>
      </div>
      <div class="row">
        <!-- <div class="col-md-4 col-sm-6">
          <div class="probootstrap-card probootstrap-listing">
            <div class="probootstrap-card-media">
              <img src="https://uicookies.com/demo/theme/haus/img/slider_1.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
              <a href="#" class="probootstrap-love"><i class="icon-heart"></i></a>
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading"><a href="#">3 Bed Room Property for Sale</a></h2>
              <div class="probootstrap-listing-location">
                <i class="icon-location2"></i> <span>Mamba, KG 680 St, Kigali</span>
              </div>
              <div class="probootstrap-listing-category for-sale"><span>for sale</span></div>
              <div class="probootstrap-listing-price"><strong>$ 1,121,000</strong> / month</div>
            </div>
            <div class="probootstrap-card-extra">
              <ul>
                <li>
                  Area
                  <span>2400 m2</span>
                </li>
                <li>
                  Beds
                  <span>3</span>
                </li>
                <li>
                  Baths
                  <span>2</span>
                </li>
                <li>
                  Garages
                  <span>1</span>
                </li>
              </ul>
            </div>
          </div> 
          <!-- END listing -->
        </div>
        @foreach($houses as $house)
        <section class="probootstrap-section probootstrap-section-lighter">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="probootstrap-card probootstrap-listing">
                  <div class="probootstrap-card-media"> 
                    <img src="img/slider_1.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
                    <a href="/houseShow" class="probootstrap-love"><i class="icon-heart"></i></a>
                  </div>
                  <div class="probootstrap-card-text">
                   <h2 class="probootstrap-card-heading"><a href="#">{{ $house->id }}</a></h2>
                   <div class="probootstrap-listing-location">
                      <i class="icon-location2"></i> <span>{{ $house->houseLocation }}</span>
                    </div>
                    <div class="probootstrap-listing-category for-sale"><span>For Rent</span></div>
                    <div class="probootstrap-listing-price"><strong>{{ $house->housePrice }}/{{ $house->paymentfrequency_id }}</strong></div>
                  </div>
                  <div class="probootstrap-card-extra">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        @endforeach
      </div>
    </div>
  </section>

  <section class="probootstrap-half reverse">
    <div class="image-wrap">
      <div class="image" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0TAQvR-xSGkcmDTd-5__FX5b8bkpwKB3rV1N406vHUUvDkBrRsw);"></div>
    </div>
    <div class="text">
      <p class="mb10 subtitle">Why Choose Us</p>
      <h3 class="mt0 mb40">You Will Love Our Services</h3>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      <p class="mb50">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
      <p><a href="#" class="btn btn-primary mb10">Find out more</a></p>
    </div>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row heading">
        <h2 class="mt0 mb50 text-center">Our Services</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service text-center">
            <div class="icon"><i class="icon-list2"></i></div>
            <h2 class="heading">Property Listing</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service text-center">
            <div class="icon"><i class="icon-power-cord"></i></div>
            <h2 class="heading">Property Management</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service text-center">
            <div class="icon"><i class="icon-price-tag2"></i></div>
            <h2 class="heading">Renting Properties</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="clearfix visible-lg-block visible-md-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service text-center">
            <div class="icon"><i class="icon-direction"></i></div>
            <h2 class="heading">Selling Properties</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service text-center">
            <div class="icon"><i class="icon-home3"></i></div>
            <h2 class="heading">Brook A Property</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
          <div class="service text-center">
            <div class="icon"><i class="icon-magnifying-glass"></i></div>
            <h2 class="heading">Search Property</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="clearfix visible-lg-block visible-md-block"></div>
      </div>
    </div>
  </section>

  <!-- END: section -->

  <section class="probootstrap-section probootstrap-section-lighter">
    <div class="container">
      <div class="row heading">
        <h2 class="mt0 mb50 text-center">Our Agents</h2>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="probootstrap-card probootstrap-person text-left">
            <div class="probootstrap-card-media">
              <img src="img/person_1.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Jeremy Slater</h2>
              <p><small>Real Estate Brooker</small></p>
              <p><a href="#">View Details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-card probootstrap-person text-left">
            <div class="probootstrap-card-media">
              <img src="img/person_2.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">James Butterly</h2>
              <p><small>Buying Agent</small></p>
              <p><a href="#">View Details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-card probootstrap-person text-left">
            <div class="probootstrap-card-media">
              <img src="img/person_3.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">James Smith</h2>
              <p><small>Real Estate Brooker</small></p>
              <p><a href="#">View Details</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-card probootstrap-person text-left">
            <div class="probootstrap-card-media">
              <img src="img/person_4.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Chris White</h2>
              <p><small>Selling Agent</small></p>
              <p><a href="#">View Details</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection