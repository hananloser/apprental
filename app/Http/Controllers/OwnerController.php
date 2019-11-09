<?php

namespace App\Http\Controllers;

use App\Car;
use App\Owner;
use Illuminate\Http\Request;
use Image ;
class OwnerController extends Controller
{

    public $headers = [
        'Content-Type'    => 'application/json',
        'X-With-Requests' => 'X-With-Requests'
    ];

    public function getOwnerWithCar()
    {
        $getDataWithOwner = Owner::all()->load('cars');

        return response($getDataWithOwner, 200)
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-With-Requests' => 'XMLHttpRequests'
            ]);
    }
    public function createOwners(Request $request)
    {
        $validsi = $this->validate($request, [
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'rekening'  => 'required',
            'no_rekening' => 'required',
            'foto'      => 'mimes:png,jpg'

        ]);

        if ($request->hasFile('foto')) {

            $image = $request->file('foto');
            $nameImage = $request->file('foto')->getClientOriginalName();

            $thumbImage = Image::make($image->getRealPath())->resize(600, 400);
            $thumbPath = public_path('uploads/thumb/owner/').$nameImage;
            $thumbImage = Image::make($thumbImage)->save($thumbPath);

            $oriPath = public_path('uploads/normal/owner/'). $nameImage;
            $oriImage = Image::make($image)->save($oriPath);
        };

        if ($validsi) {
            Owner::firstOrcreate([
                'nama_depan'    => $request->nama_depan,
                'nama_belakang' => $request->nama_belakang,
                'alamat'        => $request->alamat,
                'no_hp'         => $request->no_hp,
                'foto'          => $nameImage,
                'rekening'      => $request->rekening,
                'no_rekening'   => $request->no_rekening
            ]);
            return response([
                'status'    => true,
                'messages'  => 'data berhasil di buat'
            ], 201, $this->headers);
        }
    }

    public function update(Request $request, $id)
    { }
}
