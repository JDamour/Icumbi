@extends('layouts.user-p')
@section('title', 'Booked houses')
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
        <li><a href="#"><i class="fa fa-dashboard"></i> Service</a></li>
        <li class="active">view all</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Services</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="table_houses" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>District</th>
                        <th>Sector</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach ($services as $service)
                      <tr>
                        <td>{{$service->house->district->name}}</td>
                        <td>{{$service->house->sector->name}}</td>
                        @if($service->payment_id != NULL)
                        <td>Paid</td>
                        <td>
                            <span class="label bg-purple">
                                <a style="color:white" href="{{route('custom.service.show', $service->id)}}">View House Details</a>
                            </span>
                        </td>
                        @else
                        <td>Unpaid</td>
                        <td>
                            <span class="label bg-purple">
                                <a style="color:white" href="#" disabled>View House Details</a>
                            </span>
                        </td>
                        @endif
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