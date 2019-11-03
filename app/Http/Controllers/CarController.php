<?php

namespace App\Http\Controllers;

use App\Car;
use App\Owner;
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
                'warna'         => $e->warna,
                'kapasitas'     => $e->kapasitas,
                'model_tahun'   => $e->model_tahun,
                'jenis'         => $e->jenis,
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
}
