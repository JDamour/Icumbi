@extends('admin.master')
@section('title', 'Delete house')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        House
        <small>Delete</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.houses.index')}}"><i class="fa fa-dashboard"></i> house</a></li>
        <li class="active">delete</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Delete Confirmation</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{route('admin.houses.destroy', $id)}}">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        Are you sure you want to delete this house?
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-default" onclick="javascript:history.back()">Cancel</button>
                <button type="submit" class="btn btn-danger pull-right btn-flat">Delete House</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
