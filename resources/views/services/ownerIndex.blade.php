@extends('houseOwner.master')
@section('title', 'List Booked Houses')
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
                    <h3 class="box-title">Houses</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="table_houses" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Date Created</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach ($services as $service)
                      <tr>
                        @foreach($service->house->uploads as $upload)
                        <td><img src="{{asset('images/HouseUploads/' . $upload->source)}}" width="100px" alt="image" title="image"/></td>
                        @break
                        @endforeach
                        <td>{{$service->user->firstName}} {{$service->user->lastName}}</td>
                        <td>{{$service->user->email}}</td>
                        <td>{{$service->user->phoneNumber}}</td>
                        <td>{{$service->created_at}}</td>
                        <td>
                            <span class="label bg-purple">
                                <a style="color:white" href="{{route('houses.show', $service->house_id)}}">View House</a>
                            </span>
                        </td>
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
            </div>
        </div>

      </section>
    </div>
@endsection
