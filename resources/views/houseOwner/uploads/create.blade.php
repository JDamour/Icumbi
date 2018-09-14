@extends('layouts.master')
@section('title', 'add house')
@section('content')
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
@endsection