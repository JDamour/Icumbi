
@extends('layouts.app')
@section('title', 'houses')
@section('link')
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
                <a href="/">Home</a><span>South</span>
              </div>
              <h1>South</h1>
            </div>

          </div>
        </div>
      </div>
    </div>
    
  </section>
  
  <section class="probootstrap-section probootstrap-section-lighter">
  
    <div class="container">
    
      <div class="row">
      @foreach($houses as $house)
        <div class="col-md-4 col-sm-6">
          <div class="probootstrap-card probootstrap-listing">
            <div class="probootstrap-card-media">
            <a href="{{route('houseshow.show', $house->id)}}">
              

            </div></a>
            <div class="probootstrap-card-text">
            <h2 class="probootstrap-card-heading"><a href="{{route('houseshow.show', $house->id)}}">House Id: {{ $house->id }}</a></h2>
              <div class="probootstrap-listing-location">
              <a href="{{route('houseshow.show', $house->id)}}">  <i class="icon-location2"></i> <span>Location:   </span>
              </div>
              <div class="probootstrap-listing-category for-sale"><span>For Rent</span></div>
              <div class="probootstrap-listing-price"><strong>{{ $house->housePrice }}</strong></div>
            </div></a>
             
            
            <div class="probootstrap-card-extra">
            </div>
          </div>
        </div>
        @endforeach
        </div>
    </div>
  </section>
@endsection
