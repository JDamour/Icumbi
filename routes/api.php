<?php

use Illuminate\Http\Request;
use App\Http\Resources\House\ProvinceResource;
use App\Http\Resources\House\UserResource;
use App\Province;
use App\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Return API Docs
Route::get('/docs', function () {
    return view('frontend.apidocs');
});

// API Function to get user details
Route::middleware('auth:api')->post('/user', 'api\AuthController@details');

// API Authentication Functions
Route::post('/login', 'api\AuthController@login');
Route::post('/register', 'api\AuthController@register');

// API Function to get list of all provinces and their districts
Route::get('/provinces', function() {
    return (ProvinceResource::collection(Province::all()))
    ->additional([
        "count" => Province::count()
    ]);
});
Route::middleware('auth:api')->get('user/{id}', function($id) {
    $user = User::find($id);
    if ($user) {
        return (new UserResource($user)) ;
    } else {
        return response()->json([
            "status" => "404",
            "description" => "user not found"
        ], 404);
    }
   
});


// API House Functions
Route::group(["prefix" => "houses"], function() {
    Route::get('/show/{house}', 'api\MasterHouseController@show');
    Route::post('/list', 'api\MasterHouseController@list');
});


// API Service Functions
Route::group(["prefix" => "service"], function() {
    Route::post('/list', 'api\ServiceController@listBookedHouses');
    Route::get('/show/{service}', 'api\ServiceController@showBookedHouse')->name('api.service.show');
    Route::post('/refund', 'api\ServiceController@refundHouse');
    Route::post('/book', 'api\ServiceController@bookHouse');
});

Route::post('password/email', 'Auth\ForgotPasswordController@getResetToken');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');







// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::apiResource('houses', 'api\HouseController',[
//     'as' => 'v1'
// ]);

// Route::group(['prefix => houses'], function(){
//     Route::apiResource('/{house}/photos', 'api\UploadController');
// });



// Route::group(['middleware' => 'auth:api'], function(){
//     Route::post('user/houses', 'api\AuthController@userHouses');
// });

