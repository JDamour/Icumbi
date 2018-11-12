@extends('admin.master')
@section('title', 'List Users')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> user</a></li>
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
                  <div class="box-body" style="width: 100;">
                    <table id="table_houses" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach ($users as $user)
                      <tr>
                        <td>{{$user->firstName}}</td>
                        <td>{{$user->lastName}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phoneNumber}}</td>
                        <td>{{$user->amount}}</td>
                        <td>
                        @if ($user->isAdmin())
                        System Admininstrator
                        @endif
                        @if($user->isOwner())
                        House Owner
                        @endif
                        @if($user->isUser())
                        User
                        @endif
                        </td>
                        <td>
                          <span class="label bg-purple"><a style="color:white" href="{{action('UserManagementController@show', $user->id)}}">open</a></span>
                          
                          <form action="{{action('UserManagementController@destroy', $user->id)}}" method="post">
                            <span class="label bg-maroon"><a style="color:white" href="#" onclick="deleteUser(event)">Delete</a></span>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">
                          </form>
                        </td>
                      </tr>
                      @endforeach
                      </tbody>
                        <script type="text/javascript">
                          function deleteUser(e) {
                            e = e || window.event;
                            e.preventDefault();
                            if (confirm('Do you want to continue?')) {
                              e.target.parentElement.parentElement.submit();
                            }
                          }
                          
                        </script>
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
