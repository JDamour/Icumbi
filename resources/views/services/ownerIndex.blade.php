@extends('layouts.master')
@section('title', 'List house')
@section('content')
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
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Payment Reference Number</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach ($services as $service)
                      <tr>
                        <td>{{$service->email}}</td>
                        <td>{{$service->phone_number}}</td>
                        <td>{{$service->payment_id}}</td>
                        <td>
                            <span class="label bg-purple">
                                <a style="color:white" href="{{route('houses.show', $service->house_id)}}">View House</a>
                            </span>
                        </td>
                      </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Payment Reference Number</th>
                        <th>Action</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
            </div>
        </div>
@endsection