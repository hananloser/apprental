<?php

namespace App\Http\Controllers;

use App\Car;
use App\Owner;
use App\Rent_price;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // Response Header 
    public $headers = [
        'Content-Type'    => 'application/json',
        'X-With-Requests' => 'X-With-Requests'
    ];
    /// ========================================================================
    // Add Some cars with a $id for relation 
    // Tambah Data berdasarkan $id 
    // ========================================================================
    public function addCars(Request $request, $id)
    {
        $owner = Owner::where('owner_id', $id)->first();
        $this->validate($request, [
            'warna'     => 'required',
            'plat_polisi'     => 'required',
            'nomor_chasis'  => 'required',
            'kapasitas'     => 'required|numeric',
            'model_tahun'   => 'required|numeric',
            'jenis'         => 'required',
        ]);
        Car::create([
            'warna'     => $request->warna,
            'plat_polisi'     => $request->plat_polisi,
            'nomor_chasis'  => $request->nomor_chasis,
            'kapasitas'     => $request->kapasitas,
            'model_tahun'   => $request->model_tahun,
            'owner_id'      => $owner->owner_id,
            'jenis'         => $request->jenis,
            'gambar'       => $request->gambar
        ]);
        return response([
            'status'    => true,
            'messages'  => 'data berhasil di buat'
        ], 200)->withHeaders($this->headers);
    }

    // =========================================================================
    // Get a price 
    // =========================================================================
    public function getPrice()
    {
        $car = Car::with('price')->get();

        $clean = $car->map(function ($e) {
            return [
                'car_id'        => $e->car_id,
                'jenis'         => $e->jenis,
                'warna'         => $e->warna,
                'kapasitas'     => $e->kapasitas,
                'model_tahun'   => $e->model_tahun,
                'price'         => $e->price->map(function ($call) {
                    return [
                        'region'  => $call->region,
                        'price'   => $call->price,
                    ];
                })
            ];
        });
        return response($clean, 200, $this->headers);
    }
    // =========================================================================
    // Add Price for Cars
    // =========================================================================
    public function addPricesCars(Request $request, $id)
    {
        $car = Car::where('car_id', $id)->first();
        $this->validate($request, [
            'region'    => 'required',
            'price'     => 'required|numeric'
        ]);

        Rent_price::create([
            'car_id'    => $car->car_id,
            'region'    => $request->region,
            'price'     => $request->price
        ]);

        return response([
            'status'    => true,
            'messages'  => 'data berhasil di tambahkan'
        ], 201, $this->headers);
    }
    // =========================================================================
    // Update harga
    // =========================================================================
    public function updatePrice(Request $request, $id)
    {

        $this->validate($request, [
            'region' => 'required',
            'price'  => 'required|numeric'
        ]);
        Rent_price::where('id', $id)->update([
            'region'    => $request->region,
            'price'     => $request->price
        ]);
        return response([
            'status'    => true,
            'messages'  => 'data berhasil di update'
        ], 201, $this->headers);
    }

    public function delete($id){
        Rent_price::where('id' , $id)->delete() ; 
        return response([
            'status'    => true , 
            'messages'  => 'data have deleted'
        ] , 403 , $this->headers);
    }
}
