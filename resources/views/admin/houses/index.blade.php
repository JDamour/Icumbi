@extends('layouts.master')
@section('content')
  <aside class="main-sidebar">
      <section class="sidebar">

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigation</li>
        <!-- Optionally, you can add icons to the links -->

		<li class="treeview active">
          <a href="#"><i class="fa fa-home"></i> <span>House</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.houses.create') }}"><i class="fa fa-circle-o"></i> New</a></li>
            <li><a href="{{ route('admin.houses.index') }}"><i class="fa fa-circle-o"></i> View All</a></li>
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
                  <div class="box-body" style="width: 100;overflow-x: scroll">
                    <table id="table_houses" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Owner</th>
                        <th>Street Code</th>
                        <th>Price</th>
                        <th>Country</th>
                        <th>Province</th>
                        <th>District</th>
                        <th>Sector</th>
                        <th>Cell</th>
                        <th>Payment Frequency</th>
                        <th>Number of rooms</th>
                        <th>Width x length</th>
                        <th>Extra</th>
                        <th>Services</th>
                        <th>Reports</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach ($houses as $house)
                      <tr>
                        <td>{{$house->user->national_id}}</td>
                        <td>{{$house->streetCode}}</td>
                        <td>{{$house->housePrice}}</td>
                        <td>{{$house->country->name}}</td>
                        <td>{{$house->province->name}}</td>
                        <td>{{$house->district->name}}</td>
                        <td>{{$house->sector->name}}</td>
                        <td>{{$house->cell}}</td>
                        <td>{{$house->paymentfrequency->name}}</td>
                        <td>{{$house->numberOfRooms}}</td>
                        <td>{{$house->width}} x {{$house->length}}</td>
                        <td>
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
                        </td>
                        <td>{{count($house->service)}}</td>
                        <td>{{count($house->reports)}}</td>
                        @if($house->status == 1)
                        <td><span class="label label-success">Active</span></td>
                        @elseif($house->status == 2)
                        <td><span class="label label-warning">Booked</span></td>
                        @else
                        <td><span class="label label-danger">Disabled</span></td>
                        @endif
                        <td>
                          <span class="label bg-purple"><a style="color:white" href="{{route('admin.houses.show', $house->id)}}">open</a></span>
                          <span class="label bg-maroon"><a style="color:white" href="{{route('admin.houses.delete', $house->id)}}">Delete</a></span></td>
                      </tr>
                      @endforeach
                      </tbody>

                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
            </div>
        </div>

    <!-- /.content -->

  <!-- /.content-wrapper -->

  


  
@endsection
