<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Icumbi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
    <div class="fluid-container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <form method="POST" action="{{ route('custom.service.show', $data)}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class='form-row'>
                        <div class='form-group'>
                            <label class='control-label'>Email</label>
                        <input autocomplete='off' class='form-control' type='email' name="email">
                        </div>
                        <div class='form-group'>
                            <button class='form-control btn btn-primary' type='submit'> Continue →</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>