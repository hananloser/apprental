<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Http\Resources\TransaksiResource ;
use Illuminate\Http\Request;
use Validator; 

class TransaksiController extends Controller
{
    public $headers = [
        'Content-Type'    => 'application/json',
        'X-Requested-With' => 'XMLHttpRequest'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trans = Transaksi::get();
        return $trans ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $valid = $request->validate([
            'uuid' => 'required',
            'jenis' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        if($valid){
            Transaksi::firstOrCreate($request->all());
        }

        return response()->json([
            'status' => true , 
            'pesan'  => 'data berhasil di buat'
        ]);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi , $uuid)
    { 
        $result = $transaksi->all()->where('uuid', $uuid);
        return response($result, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        
    }
}
