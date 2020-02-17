## Applikasi Rental Mobil BackEnd 

# Route Penting
##  Ambil Cars
    * Route::get('cars', 'OwnerController@getOwnerWithCar');
    * Route::get('cars/owners' , 'CarController@getCarsWithOwner');
    * Route::get('cars/{car_id}', 'CarController@getCarWithID');
##  Tambah Owners
    * [] Route::post('owners', 'OwnerController@createOwners')->middleware('auth:api');
    * [] Route::get('owners', 'OwnerController@getAllOwner');
    * [] Route::get('owners/{owner_id}/detail', 'OwnerController@getOwnerById');
    * [] Route::delete('owners/{owner_id}/delete', 'OwnerController@deleteOwners');
    * [] Route::put('owners/{owner_id}/update', 'OwnerController@update')->middleware('auth:api');
    * [] //Tambah mobil By Owners
    * [] Route::post('owners/car/{owner_id}', 'CarController@addCars')->middleware('auth:api');
    * [] Route::put('owners/car/{owner_id}/{car_id}', 'CarController@updateCars')->middleware('auth:api');
    * [] Route::delete('owners/car/{owner_id}/{car_id}', 'CarController@deleteCars')->middleware('auth:api');
## Car Price
    * [] Route::get('cars/price', 'CarController@getPrice');
    * [] Route::post('cars/price/{car_id}', 'CarController@addPricesCars')->middleware('auth:api');
    * [] Route::put('cars/price/{car_id}/update', 'CarController@updatePrice')->middleware('auth:api');
    * [] Route::delete('cars/price/{car_id}/delete', 'CarController@delete')->middleware('auth:api');
      
## Route Transaksi

    * [] Route::get('/transaksi' , 'TransaksiController@index');
    * [] Route::get('/transaksi/{uuid}' , 'TransaksiController@show');
    * [] Route::post('/transaksi' , 'TransaksiController@store');

## By Hanan Asyrawu :tada: