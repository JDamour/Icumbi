@extends('admin.master')
@section('title', 'List Houses')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        House
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.houses.index')}}"><i class="fa fa-dashboard"></i> house</a></li>
        <li class="active">view all</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">


      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        @include('partials.success')
        @include('partials.error')
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Houses</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body" style="width: 100;overflow-x: scroll">

                  <div class="box box-primary">
                    <form class="form-inline" action="{{route('admin.houses.filter')}}" method="post">
                    <div class="box-body">
                    <div class="form-group">
                      <label>From:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker" autocomplete="off" name="from">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label>To:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepicker2" autocomplete="off" name="to">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                    <button type="submit" class="btn btn-info">Filter</button>
                    </div>
                    </div>
                    </form>

                  </div>
                    <table id="table_houses" class="table table-bordered table-striped dataTable">
                      <thead>
                      <tr>
                        <th>Photo</th>
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
                        @foreach($house->uploads as $upload)
                        <td><img src="{{asset('images/HouseUploads/' . $upload->source)}}" width="100px" alt="image" title="image"/></td>
                        @break
                        @endforeach
                        <td>{{$house->user->firstName}} {{$house->user->lastName}}</td>
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
                        <td><span class="label label-warning">Created</span></td>
                        @elseif($house->status == 2)
                        <td><span class="label label-success">Approved</span></td>
                        @elseif($house->status == 3)
                        <td><span class="label label-success">Booked</span></td>
                        @elseif($house->status == 5)
                        <td><span class="label label-success">On Hold</span></td>
                        @else
                        <td><span class="label label-danger">Blocked</span></td>
                        @endif
                        <td>
                          <span class="label bg-purple"><a style="color:white" href="{{route('admin.houses.show', $house->id)}}">open</a></span>
                          @if($house->status == 1 || $house->status == 4 || $house->status == 5)
                          <span class="label bg-purple"><a style="color:white" href="{{route('admin.houses.updateStatus', [$house->id, 2])}}">Approve / Unhold / Unblock House</a></span>
                          @endif
                          @if($house->status == 2)
                          <span class="label bg-purple"><a style="color:white" href="{{route('admin.houses.updateStatus', [$house->id, 4])}}">Block House</a></span>
                          <span class="label bg-purple"><a style="color:white" href="{{route('admin.houses.updateStatus', [$house->id, 5])}}">Hold House</a></span>
                          @endif
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

        </section>
    <!-- /.content -->

  </div>



  


  
@endsection
