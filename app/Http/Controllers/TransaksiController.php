<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Http\Resources\TransaksiResource ;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public $headers = [
        'Content-Type'    => 'application/json',
        'X-With-Requests' => 'X-With-Requests'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $trans = Transaksi::with('car', 'owner' , 'price')->paginate();

        $data = $trans->map(function($e){
           return [
             'id'       => $e->id,
             'rent_id'  => $e->rent_id,
             'car_id'   => $e->car_id,
             'owner'    => $e->owner->nama_depan,
             'car'      => $e->car->jenis,
             'status'   => $e->car->status,
             'prices'   => $e->price->price
           ];
        });
        return response()->json($data, 200); ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi , $id)
    {
        $trans = Transaksi::with('car', 'owner' , 'price')->where('id',$id)->get();
        $data = $trans->map(function($e){
            return [
              'id'       => $e->id,
              'rent_id'  => $e->rent_id,
              'car_id'   => $e->car_id,
              'owner'    => $e->owner->nama_depan,
              'car'      => $e->car->jenis,
              'status'   => $e->car->status,
              'prices'   => $e->price->price
            ];
         });
         return response($data , 200 , $this->headers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
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
        //
    }
}
