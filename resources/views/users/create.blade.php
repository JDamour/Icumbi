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
                    <div class="box"
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
  </div>

@endsection