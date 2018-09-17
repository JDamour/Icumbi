Search form
--------------
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="search"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>


Search action
------------------
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('welcome')->withDetails($user)->withQuery ( $q );
    else return view ('welcome')->withMessage('No Details found. Try to search again !');
});


search results
------------------------- 

<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>house number</th>
                <th>Location</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $house)
            <tr>
            <td>{{$house->id}}</td>
                <td>{{$house->houseLocation}}</td>
                <td>{{$house->housePrice}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>