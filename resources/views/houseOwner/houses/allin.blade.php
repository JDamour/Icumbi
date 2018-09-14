//create
  <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create New House</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ route('houses.store')}}">
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
                    <input type="text" class="form-control" id="" placeholder="KN 01St" name="streetCode" required>
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
                    <select class="form-control" name="cell" id="select_cells" required>
                    </select>
                  </div>
                </div>
                <script>
                    var countries_el = document.getElementById('select_countries');
                    var provinces_el = document.getElementById('select_provinces');
                    var districts_el = document.getElementById('select_districts');
                    var sectors_el = document.getElementById('select_sectors');
                    var cells_el = document.getElementById('select_cells');
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
                            render_cells();
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
                      sectors_el.addEventListener('change', render_cells);
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
                <button type="submit" class="btn btn-info pull-right">Add House</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

    </section>
    <!-- /.content -->
//delete
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Delete Confirmation</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{route('houses.destroy', $id)}}">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        Are you sure you want to delete this house?
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-default" onclick="javascript:history.back()">Cancel</button>
                <button type="submit" class="btn btn-danger pull-right btn-flat">Delete House</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
//edit
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

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
                    <select class="form-control" name="cell" id="select_cells" required>
                    </select>
                  </div>
                </div>
                <script>
                    var countries_el = document.getElementById('select_countries');
                    var provinces_el = document.getElementById('select_provinces');
                    var districts_el = document.getElementById('select_districts');
                    var sectors_el = document.getElementById('select_sectors');
                    var cells_el = document.getElementById('select_cells');
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
                            render_cells();
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
                      sectors_el.addEventListener('change', render_cells);
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

    </section>
    <!-- /.content -->
//index
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Houses</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="table_houses" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Owner</th>
                        <th>Street Code</th>
                        <th>Price</th>
                        <th>Cell</th>
                        <th>Payment Frequency</th>
                        <th>Services</th>
                        <th>Reports</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach ($houses as $house)
                      <tr>
                        <td>{{$house->streetCode}}</td>
                        <td>{{$house->housePrice}}</td>
                        <td>{{$house->cell->name}}</td>
                        <td>{{$house->paymentfrequency->name}}</td>
                        <td>{{count($house->service)}}</td>
                        <td>{{count($house->reports)}}</td>
                        <td><span class="label label-success">Active</span></td>
                        <td>
                          <span class="label bg-purple"><a style="color:white" href="{{route('houses.show', $house->id)}}">open</a></span>
                          <span class="label bg-maroon"><a style="color:white" href="{{route('owner.houses.delete', $house->id)}}">Delete</a></span></td>
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Owner</th>
                        <th>Street Code</th>
                        <th>Price</th>
                        <th>Cell</th>
                        <th>Payment Frequency</th>
                        <th>Services</th>
                        <th>Reports</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
//show
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Display House</h3>
              <p class="pull-right"><a class="btn btn-sm bg-olive" href="{{route('houses.edit', $house->id)}}">
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
                  <label class="col-sm-2 control-label" style="text-align:left">Payment Frequency</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" value="{{$house->paymentfrequency->name}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:left">Country</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" value="{{$house->cell->sector->district->province->country->name}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:left">Province</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" value="{{$house->cell->sector->district->province->name}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:left">District</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" value="{{$house->cell->sector->district->name}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:left">Sector</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" value="{{$house->cell->sector->name}}" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:left">Cell</label>
                  <div class="col-sm-10 col-md-8 col-lg-6">
                    <input type="text" class="form-control" value="{{$house->cell->name}}" disabled>
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
    <!-- /.content -->