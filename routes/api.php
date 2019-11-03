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

// =============================================================================
// Authentikasi Endpoint 
// =============================================================================
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

// =============================================================================
// owner endpoint
// =============================================================================
Route::group(['prefix' => 'v1'], function () {
        Route::get('cars', 'OwnerController@getOwnerWithCar');
        Route::post('owners' , 'OwnerController@createOwners');
        Route::post('owners/car/{car_id}' , 'CarController@addCars');
        Route::get('cars/price' , 'CarController@getPrice')->middleware('auth:api');
});
