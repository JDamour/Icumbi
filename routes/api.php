<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('houses', 'api\HouseController',[
    'as' => 'v1'
]);

Route::group(['prefix => houses'], function(){
    Route::apiResource('/{house}/photos', 'api\UploadController');
});

Route::post('login', 'api\AuthController@login');
Route::post('register', 'api\AuthController@register');

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'api\AuthController@details');
    Route::post('user/houses', 'api\AuthController@userHouses');
    });

