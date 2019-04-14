@extends('layouts.app')
@section('title', 'List Houses')
<!-- @section('content') -->
    <head>
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Live Search</title>
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Houses info </h3>
                    </div>
                    <div class="panel-body">
                    <div class="form-group">
                    <!-- <input type="text" class="form-controller" id="search1" name="search"></input> -->
                    </div>
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
                <!-- </div> -->
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
                        // $('#card').html(data);
                        // $('tbody').html(data);
                        $('#card').html(data);
                    }
                });
            })
         </script>
         <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        </script>
    </body>
<!-- @endsection -->