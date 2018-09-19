@extends('layouts.master')
@section('title', 'add house')
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
                        <td>{{$house->user->national_id}}</td>
                        <td>{{$house->streetCode}}</td>
                        <td>{{$house->housePrice}}</td>
                        <td>{{$house->cell->name}}</td>
                        <td>{{$house->paymentfrequency->name}}</td>
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
@endsection