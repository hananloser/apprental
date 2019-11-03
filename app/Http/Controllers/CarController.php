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

    //TambahKan Mobil berdasarkan Owner Yang Terpilih 
    public function addCars(Request $request, $id)
    {
        $owner = Owner::where('owner_id' , $id)->first(); 
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
            'status'    => true , 
            'messages'  => 'data berhasil di buat'
        ] , 200)->withHeaders($this->headers);
    }
}
