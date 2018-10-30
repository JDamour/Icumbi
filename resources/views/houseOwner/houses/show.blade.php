@extends('houseOwner.master')
@section('title', 'add house')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        House
        <small>Create</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> house</a></li>
        <li class="active">new</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        @include('partials.success')
        @include('partials.error')
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Display House</h3>
              <p class="pull-right">
                @if($house->status == 5)
                <a class="btn btn-sm bg-olive" href="{{ route('owner.houses.getHouseFromHold', $house->id)}}"> <i class="fa fa-check-circle"></i> Unsuspend House</a>
                @endif
                @if($house->status == 2)
                <a class="btn btn-sm bg-olive" href="{{ route('owner.houses.putHouseOnHold', $house->id)}}"> <i class="fa fa-stop"></i> Suspend House</a>
                @endif
                <a class="btn btn-sm bg-olive" href="{{route('houses.edit', $house->id)}}">
                <i class="fa fa-edit"></i> Edit</a> <a class="btn btn-sm bg-olive" href="{{route('owner.uploads.index', $house->id)}}">
                <i class="fa fa-camera"></i> View house photos</a></p>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="text-align:left">House Price</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <div class="input-group">
                        <span class="input-group-addon">RWF</span>
                        <input type="text" class="form-control" id="" value="{{$house->housePrice}}" disabled>
                        <span class="input-group-addon">.00</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label" style="text-align:left">Street code</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" id="" placeholder="KN 01St" value="{{$house->streetCode}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label"  style="text-align:left">Number of rooms</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="number" class="form-control" id="" placeholder="" name="rooms" value="{{$house->numberOfRooms}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label"  style="text-align:left">Length x Width (in meters)</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <span> {{$house->length}} <span> x <span> {{$house->width}} </span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:left">Payment Frequency</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" value="{{$house->paymentfrequency->name}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:left">Country</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" value="{{$house->country->name}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:left">Province</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" value="{{$house->province->name}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:left">District</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" value="{{$house->district->name}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:left">Sector</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" value="{{$house->sector->name}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:left">Cell</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" value="{{$house->cell}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:left">Extra</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                      @if ($house->water == 1)
                        <span class="label label-success">Water</span>
                        @endif
                        @if ($house->fenced == 1)
                        <span class="label label-success">Fenced</span>
                        @endif
                        @if ($house->toilet == 1)
                        <span class="label label-success">Toiled</span>
                        @endif
                        @if ($house->bathroom == 1)
                        <span class="label label-success">Bathroom</span>
                        @endif
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10 col-md-8 col-lg-6">
                  <label>House Location</label>
                  <div id="mapLocation" style="height:300px">
                  </div>
                </div>
                <script src="http://maps.google.com/maps/api/js"></script>
                <script src="{{asset('js/gmaps.js')}}"></script>
                <script type="text/javascript">
                  function getPosition() {
                    map = new GMaps({
                      div: '#mapLocation',
                      zoom: 16,
                      lat: parseFloat("{{explode(':', $house->houseLocation)[0]}}"),
                      lng: parseFloat("{{explode(':', $house->houseLocation)[1]}}")
                    });
                    map.addMarker({
                      lat: parseFloat("{{explode(':', $house->houseLocation)[0]}}"),
                      lng: parseFloat("{{explode(':', $house->houseLocation)[1]}}"),
                      title: 'House Location',
                      infoWindow: {
                        content: '<p>House Location</p>'
                      }
                    });
                  }
                  getPosition();
                  
                </script>
                </div>
            </form>
          </div>

        </section>
      </div>
@endsection
