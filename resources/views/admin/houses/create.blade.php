<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Icumbi| [user names]</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>app</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Icumbi</b> app</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigation</li>
        <!-- Optionally, you can add icons to the links -->
		<li class=""><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
		<li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Account</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> New</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> View All</a></li>
			<li><a href="#"><i class="fa fa-circle-o"></i> Deactivated</a></li>
          </ul>
        </li>
		<li class="treeview active">
          <a href="#"><i class="fa fa-home"></i> <span>House</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> New</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> View All</a></li>
			<li><a href="#"><i class="fa fa-circle-o"></i> Booked</a></li>
			<li><a href="#"><i class="fa fa-circle-o"></i> Reported</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#"><i class="fa fa-heart"></i> <span>Services</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Latest</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> View All</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#"><i class="fa fa-envelope"></i> <span>Message</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Unread</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> View All</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-dollar"></i> <span>Transactions</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
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
                    <input type="text" class="form-control" id="" placeholder="KN 01St" name="streetCode" required>
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
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <!-- Anything you want -->
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Icumbi app</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>