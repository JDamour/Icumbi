//create
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
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
    <!-- /.content -->
//index
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">House Pics</h3>
              <p class="pull-right"><a class="btn btn-sm bg-olive" href="{{route('owner.uploads.create', $data['house_id'])}}">
                <i class="fa fa-camera"></i> Upload photos</a></p>
            </div>
          </div>
            
          <div class="row">
            
            @foreach($data['pics'] as $pic)
              <div class="col-sm-6 col-md-4 col-lg-3" style="">
                <form class="img_delete_form" action="{{route('owner.uploads.delete', $pic->id)}}" method="post">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                  <button type="submit" class="btn btn-flat btn-danger btn-sm"><i class="fa fa-close"></i></button>
                </form>
                <img class="img-responsive" style="height:150px;object-fit:contain" src="{{asset('images/HouseUploads/' . $pic->source)}}" title="{{$pic->title}}"/>
                
              </div>
            @endforeach
          </div>
          <script>
            var img_delete_form = document.querySelectorAll('.img_delete_form');
            img_delete_form.forEach(function (val) {
              val.addEventListener('click', function(e, i) {
                e.preventDefault();
                var a = confirm('Are you sure you want to delete this image');
                if (a) {
                  val.submit();
                }
              });
            });
          </script>
        </div>
      </div>

    </section>
    <!-- /.content -->