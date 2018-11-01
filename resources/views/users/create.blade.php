@extends('admin.master')
@section('title', 'add user')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Create</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> user</a></li>
        <li class="active">new</li>
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
          <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Create User</h3>
                  <p><span class="text-danger">*</span> Required fields</p>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{action('UserManagementController@store')}}" method="POST">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputfname">First Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="inputfname" placeholder="Enter first name" name="fname">
                    </div>
                    <div class="form-group">
                      <label for="inputlname">Last Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="inputlname" placeholder="Enter last name" name="lname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="inputphone">Phone Number <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="inputphone" placeholder="Enter phone number" name="phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password <span class="text-danger">*</span></label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword2">Confirm Password <span class="text-danger">*</span></label>
                      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" name="password_confirmation">
                    </div>
                    <div class="form-group">
                      <label>Role <span class="text-danger">*</span></label>
                      <select class="form-control" name="role">
                        @foreach($roles as $role)
                          <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-success">Create</button>
                  </div>
                </form>
            </div>
          </div>
        </div>

    </section>
    <!-- /.content -->
  </div>

@endsection