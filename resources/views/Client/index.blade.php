
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Icumbi|House</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet"> -->
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
        <a href="index.html" class="probootstrap-logo">Icumbi<span></span></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="/">Home</a></li>
            <li class="active"><a href="/house">House</a></li>
            <li><a href="agents.html">Agents</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <div class="extra-text visible-xs"> 
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Address</h5>
            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
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

@extends('layouts.frontend')
@section('title', 'houses')
@section('link')
<li><a href="{{url('properties')}}">properties</a></li>
@endsection
@section('content')

  <section class="probootstrap-slider flexslider2 page-inner">
    <div class="overlay"></div>
    <div class="probootstrap-wrap-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8">

            <div class="page-title probootstrap-animate">
              <div class="probootstrap-breadcrumbs">
                <a href="#">Home</a><span>house</span>
              </div>
              <h1>Houses</h1>
            </div>

          </div>
        </div>
      </div>
    </div>
    <ul class="slides">
      <li style="background-image: url(img/slider_1.jpg);"></li>
      <li style="background-image: url(img/slider_4.jpg);"></li>
      <li style="background-image: url(img/slider_2.jpg);"></li>
    </ul>
  </section>
  <!-- END: slider  -->
  @foreach($houses as $house)
  <section class="probootstrap-section probootstrap-section-lighter">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="probootstrap-card probootstrap-listing">
            <div class="probootstrap-card-media">
              @foreach($house->uploads as $upload)
              
              
              {{ $upload->id }}
              <img src="images/HouseUploads{{ asset($upload->source) }}">
              {{ $upload->title }}
              <a href="{{route('houseshow.show', $house->id)}}" class="probootstrap-love"><i class="icon-heart"></i></a>
              @endforeach
              
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading"><a href="#">{{ $house->id }}</a></h2>
              <div class="probootstrap-listing-location">
                <i class="icon-location2"></i> <span>{{ $house->houseLocation }}</span>
              </div>
              <div class="probootstrap-listing-category for-sale"><span>For Rent</span></div>
              <div class="probootstrap-listing-price"><strong>{{ $house->housePrice }}/{{ $house->paymentfrequency['name'] }}</strong></div>
            </div>
            <div class="probootstrap-card-extra">
              
            </div>
          </div>
          <!-- END listing -->
        
          <!-- END listing -->
        </div>
      </div>
    </div>
  </section>
  @endforeach

<!--   
C:/xampp/htdocs/PROJECTS/Tres/icumbi/images/Capture.PNG
  <section class="probootstrap-section">
    <div class="container">
      <div class="row heading">
        <h2 class="mt0 mb50 text-center">Explore Our Neighborhoods</h2>
      </div>
      <div class="row probootstrap-gutter10">
        <div class="col-md-6 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
            <img src="img/slider_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>New York</h3>
              <p>430 Properties</p>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
            <img src="img/slider_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>San Francisco</h3>
              <p>294 Properties</p>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
            <img src="img/slider_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>Brooklyn</h3>
              <p>300 Properties</p>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
            <img src="img/slider_4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>Chicago</h3>
              <p>268 Properties</p>
            </div>
          </a>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6">
          <a href="#" class="probootstrap-hover-overlay">
            <img src="img/slider_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
            <div class="probootstrap-text-overlay">
              <h3>Los Angeles</h3>
              <p>342 Properties</p>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>
  <!-- END: section --><!--

  <section class="probootstrap-half reverse">
    <div class="image-wrap">
      <div class="image" style="background-image: url(img/slider_5.jpg);"></div>
    </div>
    <div class="text">
      <p class="mb10 subtitle">Why Choose Us</p>
      <h3 class="mt0 mb40">You Will Love Our Services</h3>
      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      <p class="mb50">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
      <p><a href="#" class="btn btn-primary mb10">Find out more</a></p>
    </div>
  </section> -->

@endsection