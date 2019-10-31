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


Route::group(['prefix' => 'v1'], function () {
    // =========================================================================
    // Car Endpoint
    // =========================================================================
    Route::group(['prefix' => 'mobil', 'middleware' => 'auth:api'], function () { });
    // =========================================================================
    // Owner Endpoint
    // =========================================================================
    //Route Owner Harus Pake MiddleWare
    Route::group(['prefix' => 'record'], function () {
        Route::get('owner', 'OwnerController@getuserOwner');

        // Route::group(['middleware' => 'auth:api'], function () { 
        Route::post('owner/create', 'OwnerController@store');
        Route::put('owner/update/{owner_id}', 'OwnerController@update');
        Route::delete('owner/delete/{owner_id}', 'OwnerController@delete');
        // });
    });
});
