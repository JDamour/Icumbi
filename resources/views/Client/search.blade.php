
@extends('layouts.app')
@section('title', 'search')
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
                <a href="/">Home</a><span>search</span>
              </div>
              <h1>Search</h1>
            </div>
          </div>
      </div>
    </div>
  </section>
  @if(isset($details))
        
  <section class="probootstrap-section probootstrap-section-lighter">
    <h2 style="text-align:center"> <u>List of Houses matching your search key " <b> {{ $query }} "</u></b></h2>
    @foreach($details as $house)
    <div class="container">

      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="probootstrap-card probootstrap-listing">
            <div class="probootstrap-card-media">
              @foreach($house->uploads as $upload)
                  <img src="images/HouseUploads/{{ $upload->source }}">
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
                Have liked the house <a href="{{route('houseshow.show', $house->id)}}" class="probootstrap-love"><i class="icon-heart"></i></a>
            
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
 @endif
@endsection