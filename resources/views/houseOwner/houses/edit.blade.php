@extends('layouts.master')
@section('title', 'add house')
@section('content')
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update House</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ route('houses.update', $data['house']->id)}}">
              <input type="hidden" name="_method" value="PUT">
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">House Price</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <div class="input-group">
                        <span class="input-group-addon">RWF</span>
                        <input type="text" class="form-control" id="" name="housePrice" value="{{$data['house']->housePrice}}" required>
                        <span class="input-group-addon">.00</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Street code</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" id="" placeholder="KN 01St" name="streetCode" value="{{$data['house']->streetCode}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Number of rooms</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="number" class="form-control" id="" placeholder="" name="rooms" value="{{$data['house']->numberOfRooms}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Length (in meters)</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" id="" placeholder="" name="length" value="{{$data['house']->length}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Width (in meters)</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" id="" placeholder="" name="width" value="{{$data['house']->width}}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Water</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="water" id="" required>
                    @if($data['house']->water == 1)
                      <option value="1" selected>True</option>
                      <option value="2">False</option>
                    @else
                      <option value="1">True</option>
                      <option value="2" selected>False</option>
                    @endif
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bathroom inside</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="bathroom" id="" required>
                    @if($data['house']->bathroom == 1)
                      <option value="1" selected>True</option>
                      <option value="2">False</option>
                    @else
                      <option value="1">True</option>
                      <option value="2" selected>False</option>
                    @endif
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Toilet inside</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="toilet" id="" required>
                    @if($data['house']->toilet == 1)
                      <option value="1" selected>True</option>
                      <option value="2">False</option>
                    @else
                      <option value="1">True</option>
                      <option value="2" selected>False</option>
                    @endif
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Fenced</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="fenced" id="" required>
                    @if($data['house']->fenced == 1)
                      <option value="1" selected>True</option>
                      <option value="2">False</option>
                    @else
                      <option value="1">True</option>
                      <option value="2" selected>False</option>
                    @endif
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Payment Frequency</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="payfreq" required>
                      @if (count($data['paymentfrequency']) > 0)
                        @foreach($data['paymentfrequency'] as $freq)
                        @if($data['house']->paymentfrequency->id == $freq->id)
                        <option value="{{$freq->id}}"  selected>{{$freq->name}}</option>
                        @else
                        <option value="{{$freq->id}}">{{$freq->name}}</option>
                        @endif
                        @endforeach
                      @endif
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Country</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="country" id="select_countries" required>
                      @if (count($data['countries']) > 0)
                        @foreach($data['countries'] as $country)
                        @if($data['house']->cell->sector->district->province->country->id == $country->id) 
                          <option value="{{$country->id}}" selected>{{$country->name}}</option>
                        @else
                          <option value="{{$country->id}}" >{{$country->name}}</option>
                        @endif
                        @endforeach
                      @endif
                      
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Province</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="province" id="select_provinces" required>
                    
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">District</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="district" id="select_districts" required>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sector</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="sector" id="select_sectors" required>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Cell</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" id="" placeholder="type cell name" name="cell" value="{{$data['house']->cell}}" required>
                  </div>
                </div>
                <script>
                    var countries_el = document.getElementById('select_countries');
                    var provinces_el = document.getElementById('select_provinces');
                    var districts_el = document.getElementById('select_districts');
                    var sectors_el = document.getElementById('select_sectors');
                    function render_provinces() {
                     fetch("{{ url('/') }}" + "/provinces/" + countries_el.value, {
                          method: "GET"
                      })
                      .then(function (res) {
                          return res.json();
                      }).then(function (res) {
                          res = res.map(function(value) {
                            return "<option value = '"+ value.id +"'>" + value.name +"</option>"
                          });
                          provinces_el.innerHTML = res;
                          render_districts();
                      }).catch(function (e) {
                          console.log(e);
                          provinces_el.innerHTML = "";
                      }); 
                    }
                    function render_districts() {
                     fetch("{{ url('/') }}" + "/districts/" + provinces_el.value, {
                          method: "GET"
                      })
                      .then(function (res) {
                          return res.json();
                      }).then(function (res) {
                          res = res.map(function(value) {
                            return "<option value = '"+ value.id +"'>" + value.name +"</option>"
                          });
                          districts_el.innerHTML = res;
                          render_sectors();
                      }).catch(function (e) {
                          console.log(e);
                          districts_el.innerHTML = "";
                      }); 
                    }
                    function render_sectors() {
                       fetch("{{ url('/') }}" + "/sectors/" + districts_el.value, {
                            method: "GET"
                        })
                        .then(function (res) {
                            return res.json();
                        }).then(function (res) {
                            res = res.map(function(value) {
                              return "<option value = '"+ value.id +"'>" + value.name +"</option>"
                            });
                            sectors_el.innerHTML = res;
                        }).catch(function (e) {
                            console.log(e);
                            sectors_el.innerHTML = "";
                        }); 
                      }
                    function render_cells() {
                       fetch("{{ url('/') }}" + "/cells/" + sectors_el.value, {
                            method: "GET"
                        })
                        .then(function (res) {
                            return res.json();
                        }).then(function (res) {
                            res = res.map(function(value) {
                              return "<option value = '"+ value.id +"'>" + value.name +"</option>"
                            });
                            cells_el.innerHTML = res;
                        }).catch(function (e) {
                            console.log(e);
                            cells_el.innerHTML = "";
                        }); 
                      }
                      countries_el.addEventListener('change', render_provinces);
                      provinces_el.addEventListener('change', render_districts);
                      districts_el.addEventListener('change', render_sectors);
                      render_provinces();
                  </script>
              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10 col-md-8 col-lg-6">
                  <label>click to select your location</label>
                  <span>your current location is set by default</span>
                  <div class="callout callout-success" style="display:none" id="houseLocationSetInfoWindow"><p>Location set</p></div>
                  <div id="mapLocation" style="height:300px">
                  </div>
                </div>
                <input type="hidden" name="houseLocation" value="" id="houseLocation">
                <script src="http://maps.google.com/maps/api/js"></script>
                <script src="{{asset('js/gmaps.js')}}"></script>
                <script type="text/javascript">
                  function updateHouseLocationSetInfoWindow() {
                    document.getElementById("houseLocationSetInfoWindow").style.display = "block";
                    setTimeout(function() {
                      document.getElementById("houseLocationSetInfoWindow").style.display = "none";
                    }, 3000);
                  }
                  var lat = -1.94461;
                  var lng = 30.089497200000004;
                  if (navigator.geolocation) {
                      navigator.geolocation.getCurrentPosition(getPosition, handleLocationError);
                  }
                  function getPosition(position) {
                    map = new GMaps({
                      div: '#mapLocation',
                      zoom: 16,
                      lat: position.coords.latitude,
                      lng: position.coords.longitude,
                      click: function(e) {
                        document.getElementById("houseLocation").value = e.latLng.lat() + ":" + e.latLng.lng();
                        updateHouseLocationSetInfoWindow();
                      }
                    });
                    map.addMarker({
                      lat: position.coords.latitude,
                      lng: position.coords.longitude,
                      title: 'you',
                      infoWindow: {
                        content: '<p>You are here</p>'
                      }
                    });
                    document.getElementById("houseLocation").value = position.coords.latitude + ":" + position.coords.longitude;
                  }
                  
                  function handleLocationError(error) {
                    map = new GMaps({
                      div: '#mapLocation',
                      zoom: 16,
                      lat: lat,
                      lng: lng,
                      click: function(e) {
                        document.getElementById("houseLocation").value = e.latLng.lat() + ":" + e.latLng.lng();
                        updateHouseLocationSetInfoWindow();
                      }
                    });
                    map.addMarker({
                      lat: lat,
                      lng: lng,
                      title: 'Kigali',
                      infoWindow: {
                        content: '<p>Kigali city</p>'
                      }
                    });
                    document.getElementById("houseLocation").value = lat + ":" + lng;
                  }
                  
                </script>
                </div>
              
              <script type="text/javascript">
                
              </script>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-default" onclick="javascript:history.back();">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Update House</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
@endsection
