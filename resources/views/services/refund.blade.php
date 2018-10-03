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
                <table id="table_houses" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Price</th>
                            <th>Street Code</th>
                            <th>District</th>
                            <th>Refund</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['services'] as $service)

                        @php
                        
                        $current_timestamp = $_SERVER['REQUEST_TIME'];
                        $latest_timestamp = strtotime($service->updated_at);
                        $time_diff = $latest_timestamp + (2 * 24 * 60 * 60);

                        @endphp
                        @if($current_timestamp < $time_diff && $service->refunded == false)
                        <tr>
                            <td>{{ $service->house->housePrice }}</td>
                            <td>{{ $service->house->streetCode }}</td>
                            <td>{{ $service->house->cell->sector->district->name }}</td>
                            <td>
                                <form method="POST" action="{{ route('custom.service.update', $service->id)}}">
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="hidden" name="house_id" value="{{ $data['house_id'] }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class='btn btn-danger' type='submit'> Replace</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>