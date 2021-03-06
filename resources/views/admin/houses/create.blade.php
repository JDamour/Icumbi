@extends('admin.master')
@section('title', 'add house')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        House
        <small>Create</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.houses.index')}}"><i class="fa fa-dashboard"></i> house</a></li>
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
              <h3 class="box-title">Create New House</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ route('admin.houses.store')}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">House Price</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <div class="input-group">
                        <span class="input-group-addon">RWF</span>
                        <input type="text" class="form-control" id="" name="housePrice" required>
                        <span class="input-group-addon">.00</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Street code</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" id="streetcode" placeholder="KN 01St" name="streetCode" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Number of rooms</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="number" class="form-control" id="" placeholder="" name="rooms" value="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Length (in meters)</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" id="" placeholder="" name="length" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Width (in meters)</label>

                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" id="" placeholder="" name="width" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Water</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="water" id="" required>
                      <option value="1" selected>True</option>
                      <option value="2">False</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Bathroom inside</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="bathroom" id="" required>
                      <option value="1" selected>True</option>
                      <option value="2">False</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Toilet inside</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="toilet" id="" required>
                      <option value="1" selected>True</option>
                      <option value="2">False</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Fenced</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="fenced" id="" required>
                      <option value="1" selected>True</option>
                      <option value="2">False</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Payment Frequency</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <select class="form-control" name="payfreq" required>
                      @if (count($data['paymentfrequency']) > 0)
                        @foreach($data['paymentfrequency'] as $freq)
                          <option value="{{$freq->id}}">{{$freq->name}}</option>
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
                          <option value="{{$country->id}}">{{$country->name}}</option>
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
                    <input type="text" class="form-control" id="" placeholder="type cell name" name="cell" required>
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
                <script src="https://maps.google.com/maps/api/js"></script>
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
              
                <script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initAutocomplete" async defer></script>
              <script type="text/javascript">
                var placeSearch, autocomplete;
                var componentForm = {
                  street_number: 'short_name',
                  route: 'long_name',
                  locality: 'long_name',
                  administrative_area_level_1: 'short_name',
                  country: 'long_name',
                  postal_code: 'short_name'
                };

              function initAutocomplete() {
                // Create the autocomplete object, restricting the search to geographical
                // location types.
                autocomplete = new google.maps.places.Autocomplete(
                  /** @type {!HTMLInputElement} */(document.getElementById('streetcode')),
                  {types: ['geocode']});

                // When the user selects an address from the dropdown, populate the address
                // fields in the form.
                autocomplete.addListener('place_changed', fillInAddress);
              }

              function fillInAddress() {
                // Get the place details from the autocomplete object.
                var place = autocomplete.getPlace();

                for (var component in componentForm) {
                  document.getElementById(component).value = '';
                  document.getElementById(component).disabled = false;
                }

                // Get each component of the address from the place details
                // and fill the corresponding field on the form.
                for (var i = 0; i < place.address_components.length; i++) {
                  var addressType = place.address_components[i].types[0];
                  if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                  }
                }
              }
              // Bias the autocomplete object to the user's geographical location,
              // as supplied by the browser's 'navigator.geolocation' object.
              function geolocate() {
                if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle({
                      center: geolocation,
                      radius: position.coords.accuracy
                    });
                    autocomplete.setBounds(circle.getBounds());
                  });
                }
              }
              </script>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-default" onclick="javascript:history.back();">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Add House</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    </section>
    <!-- /.content -->
  </div>

@endsection
