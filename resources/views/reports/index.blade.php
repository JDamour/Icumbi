@extends('layouts.user')
@section('title', 'add house')
@section('content')
 
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Reports</h3>
            </div>
            <!-- /.box-header -->
            @if($reports->isEmpty())
                <p class="alert alert-success text-center">no reports</p>            
            @else
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>email</th>
                  <th>subject</th>
                  <th>description</th>
                  <th>house id</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>    
                @foreach($reports as $report)         
                <tr>
                  <td>{{$report->id}}</td>
                  <td>{{$report->email}}</td>
                  <td>{{$report->subject}}</td>
                  <td>{{$report->description}}</td>
                  <td>{{$report->house_id}}</td>
                  
                  <td>
                      <a href="{{action('ReportsController@edit', $report->id)}}" class="btn btn-info">edit</a>
                      <a href="#"onclick="           
                      var deleteHouse = confirm('are your sure to delete this report?');
                        if(deleteHouse)
                            {
                                event.preventDefault();
                                document.getElementById('delete_form').submit();
                            };"
                            class="btn btn-danger"

                    >
                        delete
                    </a>
                  </td>
                </tr>
                @endforeach
                </tbody>

              </table>
     <form  method="post" id="delete_form" action="{{ route('reports.destroy', [$report->id]) }}" style="display:none;">
          <input type="hidden" name="_method" value="delete">
          {{ csrf_field()}}
      </form>
            </div>
            @endif
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    
@endsection
