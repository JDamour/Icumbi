@extends('layouts.app')



<body>
    <div class="fluid-container" style="margin-top: 200px; color: black;">
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
                        @if($current_timestamp < $time_diff && $service->refunded == 'false')
                        <tr>
                            <td>{{ $service->house->housePrice }}</td>
                            <td>{{ $service->house->streetCode }}</td>
                            <td>{{ $service->house->district->name }}</td>
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
