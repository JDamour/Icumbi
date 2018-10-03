<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Icumbi</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
    
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->
  
  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="index.html" class="probootstrap-logo">ICUMBI</a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/house">Houses</a></li>
          <!--   <li><a href="agents.html">Agents</a></li>
            <li><a href="about.html">About</a></li> -->
            <li><a href="contact.html">Contact</a></li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <button><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></button>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                 



          </ul>
          <div class="extra-text visible-xs"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Address</h5>
            <p>Rwanda, Kigali, Kimironko</p>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
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
      <li style="background-image: url(http://www.centremarembo.org/uploads/1/5/2/2/15226860/abatuje_orig.jpg); opacity:1;"></li>
      <li style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRtUjmIBDp5eq_xWCOvUMR8sI1iWUqvnYy0geFnef4B_DVHO7SvA);"></li>
      <li style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWAS81vWcZaxSIL7vrf-3qu-Tg09ls3UHKwZ_x1VFnGp3Soapl);"></li>
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
            <img style="width: 100%; height: 50vh;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTem5V2NHTNbn1a4LeifPBLff5p6ga2lIspXGJJU3V3rpPcF1E-" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>Kigali City</h3>
              <p>430 Properties</p>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
             <img style="width: 100%; height: 50vh;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZAeiR_D38ColSjKBlTwPl5TvwBBO0dxqyGUVpxNp-GOSupWlh" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>Western Province</h3>
              <p>294 Properties</p>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
            <img style="width: 100%; height: 50vh;" src ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTNU00sittj9DHb2NQ6xOZ5H86W8M6jwUfGO1uQbcFyvNL0Z8BDg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>Northern Province</h3>
              <p>300 Properties</p>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
            <img style="width: 100%; height: 50vh;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4fSpE-Dvarah3A851jqa7WyCvmj2ifuAEPwlkM6V_Vt9gqMwyJQ" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>Eastern Province</h3>
              <p>268 Properties</p>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
            <img style="width: 100%; height: 50vh;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoArxpqX_PewtkgYZK-s7Tj3mggRmwDHl7NaTPXVySA7TlUEwe" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
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

  <section class="probootstrap-section probootstrap-bg" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhgaDqc9rEnNNt9CnqMIKxhPfGmLmw7AUpdZgsj1dkt7OlANXKRQ);">
    <div class="container text-center probootstrap-animate" data-animate-effect="fadeIn">
      <h2 class="heading" style="font-family: 'Old Standard TT', serif;">Best Home &amp; Properties</h2>
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
      <!-- <div class="row"> -->
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
        <!-- </div> -->
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
                  <!--  <h2 class="probootstrap-card-heading"><a href="#">{{ $house->id }}</a></h2> -->
                   <div class="probootstrap-listing-location">
                      <i class="icon-location2"></i><span style="color: black;">{{ $house->houseLocation }}</span>
                    </div>
                    <div class="probootstrap-listing-category for-sale"><span>For Rent</span></div>
                    <div class="probootstrap-listing-price" style="color: black;">Price: <strong>{{ $house->housePrice }}/{{ $house->paymentfrequency_id }}</strong></div>
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

  <footer class="probootstrap-footer probootstrap-bg" style="background-image: url(img/slider_3.jpg)">
    <div class="container">
      <div class="row mb60">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">About Icumbi.</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            <p><a href="#">Read more...</a></p>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Quick Links</h4>
            <ul class="stack-link">
              <li><a href="/house">House</a></li>
              <li><a href="#">Rent Properties</a></li>
              <li><a href="#">Sell Properties</a></li>
              <li><a href="#">Agents</a></li>
              <li><a href="#">Testimonial</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4 class="heading">Popular Cities</h4>
            <ul class="stack-link">
              <li><a href="#">Nyarugenge <small>(320 properties)</small></a></li>
              <li><a href="#">Gasabo <small>(294 properties)</small></a></li>
              <li><a href="#">Kicukiro <small>(300 properties)</small></a></li>
              <li><a href="#">Rwamagana <small>(268 properties)</small></a></li>
              <li><a href="#">Huye <small>(342 properties)</small></a></li>
            </ul>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="probootstrap-footer-widget probootstrap-link-wrap">
            <h4 class="heading">Subscribe</h4>
            <p>Far far away behind the word mountains far from.</p>
            <form action="#">
              <div class="form-field">
                <input type="text" class="form-control" placeholder="Enter your email">
                <button class="btn btn-subscribe">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row copyright">
        <div class="col-md-6">
          <div class="probootstrap-footer-widget">
            <p>&copy; 2018 <a href="https://icumbiApp.com/">tres:Icumbi</a>. Designed by <a href="https://icumbiApp.com/">tres:Icumbi</a> <br> Demo Photos from <a href="https://pixabay.com/">Pixabay</a> &amp; <a href="https://unsplash.com/">Unsplash</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="probootstrap-footer-widget right">
            <ul class="probootstrap-footer-social">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>
  
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>