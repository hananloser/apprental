<?php

namespace App\Http\Controllers;

use App\Car;
use App\Owner;
use App\Rent_price;
use Illuminate\Http\Request;
use Image;
use Validator;

class CarController extends Controller
{
    // Response Header
    public $headers = [
        'Content-Type' => 'application/json',
        'X-With-Requests' => 'X-With-Requests',
    ];
    /// ========================================================================
    // Add Some cars with a $id for relation
    // Tambah Data berdasarkan $id
    // ========================================================================
    public function addCars(Request $request, $id)
    {
        $owner = Owner::where('owner_id', $id)->first();
        $validasi =$this->validate($request, [
            'warna' => 'required',
            'plat_polisi' => 'required',
            'nomor_chasis' => 'required',
            'kapasitas' => 'required|numeric',
            'model_tahun' => 'required|numeric',
            'jenis' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg',
        ]);
        if ($request->hasFile('gambar')) {

            $image = $request->file('gambar');
            $nameImage = $request->file('gambar')->getClientOriginalName();
            // Gambar Thumbp
            $thumbImage = Image::make($image->getRealPath())->resize(600, 400);
            // Move Gambar ke Public Path
            $thumbPath = public_path('uploads/thumb/cars/') . $nameImage;
            //Create ThumbImage Di path
            $thumbImage = Image::make($thumbImage)->save($thumbPath);

            // Gambar Asli yang di upload
            $oriPath = public_path('uploads/normal/cars/') . $nameImage;
            //Move gambar nya ke path public
            Image::make($image)->save($oriPath);
            Car::create([
                'warna' => $request->warna,
                'plat_polisi' => $request->plat_polisi,
                'nomor_chasis' => $request->nomor_chasis,
                'kapasitas' => $request->kapasitas,
                'model_tahun' => $request->model_tahun,
                'owner_id' => $owner->owner_id,
                'jenis' => $request->jenis,
                'gambar' => $nameImage,
            ]);
        };

        return response([
            'status' => true,
            'messages' => 'data berhasil di buat',
        ], 200)->withHeaders($this->headers);
    }
    // =========================================================================
    // Update Cars by Owners
    // notice gambar belum bisa di update
    // =========================================================================
    public function updateCars(Request $request, $owner_id, $car_id)
    {

        $owner = Owner::where('owner_id', $owner_id)->first();
        $data = $owner->cars()->whereCar_id($car_id)->update($request->all());
        return response([
            'status' => true,
            'messagess' => 'data berhasil di update',
        ], 201, $this->headers);
    }
    // =========================================================================
    // Delete Cars
    // =========================================================================
    public function deleteCars($owner_id, $car_id)
    {

        $owner = Owner::where('owner_id', $owner_id)->first();

        $owner->cars()->whereCar_id($car_id)->delete();
        return \response([
            'status' => true,
            'messagess' => 'data behasil di hapus',
        ], 202, $this->headers);
    }

    // =========================================================================
    // Get Cars With OWners
    // =========================================================================
    public function getCarsWithOwner()
    {

        $cars = Car::with('owner')->get();
        return \response($cars, 200, $this->headers);
    }

    // =========================================================================
    // Get a price
    // =========================================================================
    public function getPrice()
    {
        $car = Car::with('price')->get();
        $clean = $car->map(function ($e) {
            return [
                'car_id' => $e->car_id,
                'jenis' => $e->jenis,
                'warna' => $e->warna,
                'kapasitas' => $e->kapasitas,
                'model_tahun' => $e->model_tahun,
                'gambar' => $e->gambar,
                'price' => $e->price->map(function ($call) {
                    return [
                        'region' => $call->region,
                        'price' => $call->price,
                    ];
                }),
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
            'region' => 'required',
            'price' => 'required|numeric',
        ]);

        Rent_price::create([
            'car_id' => $car->car_id,
            'region' => $request->region,
            'price' => $request->price,
        ]);

        return response([
            'status' => true,
            'messages' => 'data berhasil di tambahkan',
        ], 201, $this->headers);
    }

    // =========================================================================
    // Ger Car with ID
    // =========================================================================
    public function getCarWithID($id)
    {

        $cars = Car::with('owner')->where('car_id', $id)->get();

        return response([
            'status' => true,
            'data' => $cars,
        ], 200, $this->headers);
    }

    // =========================================================================
    // Update harga
    // =========================================================================
    public function updatePrice(Request $request, $id)
    {

        $this->validate($request, [
            'region' => 'required',
            'price' => 'required|numeric',
        ]);
        Rent_price::where('id', $id)->update([
            'region' => $request->region,
            'price' => $request->price,
        ]);
        return response([
            'status' => true,
            'messages' => 'data berhasil di update',
        ], 201, $this->headers);
    }

    // =========================================================================
    // Delete price
    // =========================================================================
    public function delete($id)
    {
        Rent_price::where('id', $id)->delete();
        return response([
            'status' => true,
            'messages' => 'data have deleted',
        ], 403, $this->headers);
    }
}
