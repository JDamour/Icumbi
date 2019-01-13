@extends('layouts.app')
<!-- @section('content') -->
<section class="probootstrap-slider flexslider2 page-inner">
  <div class="overlay"></div>
    <div class="probootstrap-wrap-banner">
      <div class="container">
        <div class="row">
            <div class="page-title probootstrap-animate">
              <div class="probootstrap-breadcrumbs">
                <a href="/">Home</a><span>house</span>
              </div>
              <h1>Houses</h1>
              <!-- <input type="text" class="form-controller" id="search" name="search" style="color: #999;"></input> -->
          </div>
        </div>
      </div>
    </div>
  </section> 
<section class="probootstrap-section probootstrap-section-lighter" style="background-color: white; width: 80%;  z-index: 0; margin: 50px;">
<div class="container" style="background-color: #FCF9F9;">
    <!-- <div class="container">
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
              <div class="probootstrap-listing-price"><strong>Price:{{ $house->housePrice }}Frw {{ $house->paymentfrequency['name'] }}</strong></div>
            </div></a>
          </div>
        </div>
        @endforeach
      </div>
    </div> -->
    <div id='card'>
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
              <div class="probootstrap-listing-price"><strong>Price:{{ $house->housePrice }}Frw {{ $house->paymentfrequency['name'] }}</strong></div>
            </div></a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
      </div>
</div>
      <script type="text/javascript">
            $('#search').on('keyup',function(){
                $value=$(this).val();
                $.ajax({
                    type : 'get',
                    url : '{{ URL::to('searchaa') }}',
                    data:{'searchaa':$value},
                    success:function(data){
                        // $('tbody').html(data);
                        $('#card').html(data);
                    }
                });
            })
        </script>
        <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>
  </section>
  <!-- @section('content') -->