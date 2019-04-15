@extends('self.self-layouts')
@section('title', 'Display User')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Display</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> user</a></li>
        <li class="active">show</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        @include('partials.success')
        @include('partials.error')

        <div class="box box-info">
          <div class="box-header with-border">
            <div class="row">
              <div class="col-md-12">
                <p class="pull-right">
                  <a class="btn btn-sm bg-olive" href="{{action('UserSelfController@edit')}}"> <i class="fa fa-edit"></i> Edit</a>
                  <a class="btn btn-sm bg-olive" href="#" onclick="deleteUser(event)"> Delete User</a>
                </p>
                <form id="deleteUserForm" action="{{action('UserSelfController@destroy')}}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="_method" value="DELETE">
                </form>
                <script type="text/javascript">
                  function deleteUser(e) {
                    e = e || window.event;
                    e.preventDefault();
                    if (confirm('Do you want to continue?')) {
                      document.getElementById('deleteUserForm').submit();
                    }
                  }
                  
                </script>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                  <table class="table table-bordered table-striped">
                    <tr><td>First Name: </td> <td>{{$user->firstName}}</td></tr>
                    <tr><td>Last Name: </td> <td>{{$user->lastName}}</td></tr>
                    <tr><td>Email Address: </td> <td>{{$user->email}}</td></tr>
                    <tr><td>Phone Number: </td> <td>{{$user->phoneNumber}}</td></tr>
                    <tr><td>Role: </td>
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
                    </tr>
                  </table>
              </div>              
              </div>
            </div>
          </div>
        </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection