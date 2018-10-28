
@extends('layouts.app')
@section('title', 'search')
@section('link')
@endsection
@section('content')
<script scr="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0.jquery.mim.js"></script>
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
    </div>
  </section>

  <section class="probootstrap-section probootstrap-section-lighter">
  <!-- there is aline if codes i deleted from here which should contain search key -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" id="search" name="search" class="form-control" placeholder="Search...">
            <!-- <span class="input-group-btn">
              <button type="submit" name="searchajax" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span> -->
        </div>
      </form>
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
  <script type="type/javaScript">
    $('#search').on('keyup', function(){
        alert('test');
    })
  </script>
 @endif
@endsection