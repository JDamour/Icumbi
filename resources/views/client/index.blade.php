@extends('layouts.app')
  <section class="probootstrap-slider flexslider2 page-inner">
    <div class="overlay"></div>
    <div class="probootstrap-wrap-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="page-title probootstrap-animate">
              <div class="probootstrap-breadcrumbs">
                <a href="/">Home</a><span>house</span>
              </div>
              <h1>Houses</h1>
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
                @foreach($house->uploads as $upload)
                  <img src="/images/HouseUploads/{{ $upload->source }}">
                  @break;
                @endforeach
            </div></a>
            <div class="probootstrap-card-text">
              <div class="probootstrap-listing-location">
                <h2 class="probootstrap-card-heading"><a href="{{route('houseshow.show', $house->id)}}">Number of Bed rooms: {{ $house->numberOfRooms }}</a></h2>
                <a href="{{route('houseshow.show', $house->id)}}">  <i class="icon-location2"></i> <span>Location:   {{ $house->sector['name'] }}/{{ $house->district['name'] }}</span><br/>
              </div>
              <div class="probootstrap-listing-category for-sale"><span>For Rent</span></div>
              <div class="probootstrap-listing-price"><strong>Price:{{ $house->housePrice }} {{ $house->paymentfrequency['name'] }}</strong></div>
            </div></a>
          </div>
        </div>
        @endforeach
      </div>
      {{ $houses->links() }}
    </div>
  </section>