<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Cell;
use App\User;
use App\House;
use App\Sector;
use App\District;
use App\Province;
use App\Paymentfrequency;
use Illuminate\Support\Facades\Input;

Route::get('sendNotification', 'MailController@sendNotification');
Route::post('contactmail', 'MailController@ContactMail');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/norecord', function () {
    return view('client.norecord');
});
Route::get('/norecordHouse', function () {
    return view('client.norecordHouse');
});

// Route::get('/', function () {
  //  return view('welcome');
// });


Route::get('/service', function () {
    return view('service');
});
Route::get('/show', function () {
    return view('show');
})->name('root');
Route::get('/addresscart', function () {
    return view('addresscart');
});

Route::get('/form', function () {
    return view('form');
});

Auth::routes();

# view routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view', 'ViewController@index');
Route::get('/view/{id}', 'ViewController@show')->name('get_view');
Route::post('/view/{id}', 'ViewController@store')->name('set_view');


# location routes
Route::get('/provinces/{id}', function($id) {
    $provinces =Province::where('country_id', $id)->get();

  echo (json_encode($provinces));

})->name('get_provinces');
Route::get('/districts/{id}', function($id) {
  echo (json_encode(District::where('province_id', $id)->get()));
})->name('get_districts');
Route::get('/sectors/{id}', function($id) {
  echo (json_encode(Sector::where('district_id', $id)->get()));
})->name('get_sectors') ;
Route::get('/cells/{id}', function($id) {
  echo (json_encode(Cell::where('sector_id', $id)->get()));
})->name('get_cells') ;

# admin routes
Route::group(['prefix' => 'admin', 'middleware' =>'auth.admin'],function () {

    #Service controller
    Route::get('/services', 'ServiceController@index')->name('admin.services.index');
    Route::post('/services/filter', 'ServiceController@search')->name('admin.services.filter');


    # house controller
    
    Route::get('/houses/updatestatus/{house_id}/{status}', 'AdminHouseController@updateStatus')->name('admin.houses.updateStatus');
    Route::get('/houses', 'AdminHouseController@index')->name('admin.houses.index');
    Route::get('/houses/create', 'AdminHouseController@create')->name('admin.houses.create');
    Route::get('/houses/{id}', 'AdminHouseController@show')->name('admin.houses.show');
    Route::post('/houses', 'AdminHouseController@store')->name('admin.houses.store');
    Route::get('/houses/{id}/edit', 'AdminHouseController@edit')->name('admin.houses.edit');
    Route::put('/houses/{id}', 'AdminHouseController@update')->name('admin.houses.update');
    Route::delete('/houses/{id}', 'AdminHouseController@destroy')->name('admin.houses.destroy');
    Route::get('/houses/delete/{id}', 'AdminHouseController@delete')->name('admin.houses.delete');
    Route::post('/houses/filter', 'AdminHouseController@search')->name('admin.houses.filter');

    # uploads controller
    Route::get('/uploads/{house_id}', 'AdminUploadsController@index')->name('admin.uploads.index');
    Route::get('/uploads/{house_id}/create', 'AdminUploadsController@create')->name('admin.uploads.create') ;
    Route::post('/uploads', 'AdminUploadsController@store')->name('admin.uploads.store') ;
    Route::delete('/uploads/{id}', 'AdminUploadsController@destroy')->name('admin.uploads.delete') ;

    // user management controller
    Route::get('/users', 'UserManagementController@index');
    Route::get('/users/create', 'UserManagementController@create');
    Route::get('/users/{id}', 'UserManagementController@show');
    Route::get('/users/{id}/edit', 'UserManagementController@edit');
    Route::post('/users', 'UserManagementController@store');
    Route::put('/users/{id}', 'UserManagementController@update');
    Route::delete('/users/{id}', 'UserManagementController@destroy');
    Route::post('/users/filter', 'UserManagementController@search')->name('admin.users.filter');
});

# Selg
Route::group(['prefix' => 'self', 'middleware' => 'auth'], function() {
    Route::get('/self/view', 'UserSelfController@show');
    Route::get('/self/edit', 'UserSelfController@edit');
    Route::put('/self/update', 'UserSelfController@update');
    Route::delete('/self/delete', 'UserSelfController@destroy');
});

# houseOwner routes
Route::group(['prefix' => 'owner', 'middleware' =>'auth.owner'], function(){

    #house owner, house controller
    Route::get('/services', 'ServiceController@ownerIndex')->name('owner.services.index');
  # house controller
  Route::resource('houses', 'OwnerHouseController');
  Route::get('/houses/delete/{id}', 'OwnerHouseController@delete')->name('owner.houses.delete');
  Route::get('/houses/hold/{id}', 'OwnerHouseController@putHouseOnHold')->name('owner.houses.putHouseOnHold');
  Route::get('/houses/unhold/{id}', 'OwnerHouseController@getHouseFromHold')->name('owner.houses.getHouseFromHold');

  # uploads controller
  Route::get('/uploads/{house_id}', 'OwnerUploadsController@index')->name('owner.uploads.index');
  Route::get('/uploads/{house_id}/create', 'OwnerUploadsController@create')->name('owner.uploads.create') ;
  Route::post('/uploads', 'OwnerUploadsController@store')->name('owner.uploads.store') ;
  Route::delete('/uploads/{id}', 'OwnerUploadsController@destroy')->name('owner.uploads.delete') ;

  #report
  Route::resource('reports', 'ReportsController');

  #message
  Route::get('message', 'MessagesController@create');
  Route::post('message', 'MessagesController@saveMessage');


});

// Route::get('/home', 'HomeController@index');
Route::get('/payments', 'PaymentController@create');
Route::post('/payments', 'PaymentController@store');
Route::get('/index', 'PaymentController@view');
Route::get('/test', 'PaymentController@store');

Route::get('/paymentmode', 'PaymentModeController@create');
Route::post('/paymentmode', 'PaymentModeController@store');
Route::get('/indexx', 'PaymentModeController@index');
Route::get('/edit', 'PaymentModeController@edit');
Route::get('/del', 'PaymentModeController@destroy');

#MASTER LAYOUT
Route::get('/master', function(){
    return view('layouts.master');
    });
    
    #Public
    
    Route::view('/search-suggestion', '/client.autocomplete');
    Route::get('/client/autocomplete', 'PublicController@searchSuggestion');
    Route::get('/house', 'PublicController@DisplayHousesOnHOusePage');
    
    Route::get('/', 'PublicController@DisplayHousesOnHomePage');
    Route::any('/houseShow/{id}', 'PublicController@show')->name('houseshow.show');
    // Route::get('/houseShow/{id}', ['uses' => PublicController@show, 'middleware' => 'AuthResource']);

    // Route::get('/searchajax','SearchController@index');
    // Route::get('/searchaa','SearchController@search');

    Route::get('/searchajax','PublicController@index');
    Route::get('/searchaa','PublicController@search');

    Route::any('/search', function(){
        $search = Input::get('search');
        // Search by sector, district, paymentfrequency, amount, No of Rooms
            $sector="";
            $district="";
            $pf="";
        if ($search != ' ') {
              $district="";
              if ($search =='gasabo' || $search =='Gasabo') {
                  $district=28;
              }
              elseif($search =='kicukiro' || $search =='Kicukiro') {
                  $district=29;
              }
              elseif($search =='nyarugenge' || $search =='Nyarugenge') {
                $district=30;
            }
            // $house_views=DB::table('views_overall_houses')->where('districtName','LIKE','%'.$request->searchaa."%")
            //         ->orWhere('sectorName','LIKE','%'.$request->searchaa."%")
            //         ->orWhere('price','LIKE','%'.$request->searchaa."%")
            //         ->orWhere('paymentFrequency','LIKE','%'.$request->searchaa."%")
            //         ->groupBy('houseId')
            //         ->get();
            
            $house = House::where('numberOfRooms','LIKE','%'.$search.'%')
            ->orWhere('housePrice','LIKE','%'.$search.'%')
            ->orWhere('paymentfrequency_id','LIKE','%'.$search.'%')
            ->orWhere('district_id','LIKE','%'.$district.'%')
            ->orWhere('sector_id','LIKE','%'.$search.'%')
            ->get();
            if(count($house)>0){
                return view('client.search')->withDetails($house)->withQuery ( $search );
            }
            else{
                return view('client.norecord');
            }
        }
        // dd($house);
    //     if ($search=="" || $search==" "){
    //     return view('client.search')->withMessage("No results found " );
    // }
    });
    Route::get('/province/{id}', 'PublicController@provinceHouses');
    Route::get('/district/{id}', 'PublicController@districtHouses');
    // Route::get('/southern', 'PublicController@south');

#user routes
Route::group(['middleware' => 'auth.user'], function(){
    Route::get('dashboard', 'UserController@index');
    Route::resource('reports', 'ReportsController');

    # user service routes
    Route::get('/service/create/{house_id}', 'ServiceController@create')->name('custom.service.create');
    Route::post('/service', 'ServiceController@store')->name('custom.service.store');
    Route::get('/service/refund/{house_id}', 'ServiceController@refund')->name('custom.service.refund');
    Route::put('/service/{service_id}', 'ServiceController@update')->name('custom.service.update');
    Route::get('/user/services', 'ServiceController@userIndex')->name('user.services.index');
    Route::get('/service/{service_id}', 'ServiceController@show')->name('custom.service.show');
});


#frontend view
Route::get('/agents', 'clientController@agents');
Route::get('/properties', 'clientController@properties');
Route::get('/about', 'clientController@about');
Route::get('/contact', 'clientController@contact');

// Payment route
Route::get('/api/payment', 'ApiPaymentController@postRemoteData');
Route::get('/api/payment/callback', 'ApiPaymentController@getRemoteData');
Route::post('/service/callback', 'ServiceController@callback')->name('custom.service.callback');