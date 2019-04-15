@extends('admin.master')
@section('title', 'List Services')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Service
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('admin/services')}}"><i class="fa fa-dashboard"></i> Service</a></li>
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
                    <h3 class="box-title">Services</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">

                    <div class="box box-primary">
                      <form class="form-inline" action="{{route('admin.services.filter')}}" method="post">
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
                    <table id="table_houses" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Photo</th>
                        <th>User</th>
                        <th>House Owner</th>
                        <th>Price</th>
                        <th>Payment Reference Number</th>
                        <th>Date Created</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach ($services as $service)
                      if ()
                      <tr>
                        @foreach($service->house->uploads as $upload)
                        <td><img src="{{asset('images/HouseUploads/' . $upload->source)}}" width="100px" alt="image" title="image"/></td>
                        @break
                        @endforeach
                        @if ($service->user)
                        <td>{{$service->user->firstName}} {{$service->user->lastName}}</td>
                        @else
                        <td> User No longer Available</td>
                        @endif
                        @if($service->house)
                        <td>{{$service->house->user->firstName}} {{$service->house->user->lastName}} </td>
                        $else
                        <td>House no longer available</td>
                        @endif
                        <td>0.00</td>
                        @if($service->payment_id != NULL)
                        <td>Paid</td>
                        @else
                        <td>Unpaid</td>
                        @endif
                        <td>{{$service->created_at}}</td>
                        <td>
                            <span class="label bg-purple">
                                <a style="color:white" href="{{route('admin.houses.show', $service->house_id)}}">View House</a>
                            </span>
                        </td>

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
  <!-- /.content-wrapper -->
@endsection
