
@extends('layouts.app')
@section('title', 'search')
@section('link')
@endsection
@section('content')
<section class="probootstrap-slider flexslider2 page-inner" style="background-image: url(images/design/image6); font-color: red;">
  <div class="overlay"></div>
  <div class="probootstrap-wrap-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="page-title probootstrap-animate">
            <div class="probootstrap-breadcrumbs">
              <a href="/">Home</a><span>search</span>
            </div>
            <h1>Search</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-section probootstrap-section-lighter">
  <h2 style="text-align:center"> <div class="probootstrap-listing-category for-sale"><span>List of houses matching your search key " <b> {{ $query }} "</b></span></div></h2>
  @if(isset($details))
  @foreach($details as $house)
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="probootstrap-card probootstrap-listing">
          <div class="probootstrap-card-media">
            @foreach($house->uploads as $upload)
            <a href="{{route('houseshow.show', $house->id)}}">
              <img src="images/HouseUploads/{{ $upload->source }}">
            </a>
            @break
            @endforeach
          </div>
          <div class="probootstrap-card-text">

            <!-- <h2 class="probootstrap-card-heading"><a href="{{route('houseshow.show', $house->id)}}">house id: {{ $house->id }}</a></h2> -->
            
            <h2 class="probootstrap-card-heading"><a href="{{route('houseshow.show', $house->id)}}">Number of Bed rooms: {{ $house->numberOfRooms }}</a></h2>
            <a href="{{route('houseshow.show', $house->id)}}">  <i class="icon-location2"></i> <span>Location:   {{ $house->sector['name'] }}/{{ $house->district['name'] }}</span>
              <div class="probootstrap-listing-category for-sale"><span>For Rent</span></div>
              <div class="probootstrap-listing-price"><strong>{{ $house->housePrice }} {{ $house->paymentfrequency['name'] }}</strong></div>
            </div>
            
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  @endif
  @endsection