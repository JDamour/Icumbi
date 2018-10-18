@extends('houseOwner.master')
@section('title', 'add house')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        House
        <small>Create</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> house</a></li>
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
            <div class="col-sm-8 col-sm-offset-1">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Upload house pics</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form role="form" method="post" action="{{route('owner.uploads.store')}}" enctype="multipart/form-data">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile" name="photos[]" multiple>
                        <input type="hidden" name="house_id" value="{{$house_id}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                      </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Upload Pics</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
      </section>
    </div>
@endsection