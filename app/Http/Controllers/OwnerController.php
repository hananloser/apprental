<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class OwnerController extends Controller
{
    public $oke = 200;
    public $serverError = 500;
    // =========================================================================
    // Ger Data Owner
    // =========================================================================
    public function GetuserOwner()
    {
        $owner = Owner::orderBy('no_hp')->with('users')->get();
        return \response()->json([
            'status'    => true,
            'data'      => $owner->map(function ($data) {
                return [
                    'user_id' => $data->user_id,
                    'no_hp' => $data->no_hp,
                    'alamat' => $data->alamat,
                    'rekening' => $data->rekening,
                    'users'  => $data->users
                ];
            })
        ], $this->oke);
    }
    // =========================================================================
    // Daftar Sebagai Owner
    // =========================================================================
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name'  => 'required',
            'no_hp'  => 'required|numeric|unique:owners,no_hp',
            'alamat' => 'required',
            'rekening' => 'required|numeric|unique:owners,rekening',
            'no_rekening' => 'required|numeric|unique:owners,no_rekening'
        ]);
        if ($validator->fails()) {
            return \response()->json([
                'status' => false,
                'erors'  => $validator->errors()
            ], $this->serverError);
        } else {
            // Cek Jika Sudah login 
            if (Auth::check() == TRUE) {
                $owner = new Owner();
                $owner->firstOrCreate([
                    'no_hp'     => $request->no_hp,
                    'alamat'    => $request->alamat,
                    'rekening'  => $request->rekening,
                    'user_id'   => Auth::user()->id
                ]);
                //Jika Data Dapat Di Create
                if ($owner == TRUE) {
                    return \response()->json([
                        'status'    => true,
                        'pesan'     => 'berhasil',
                    ], $this->oke);
                }
            }
        }
    }
    // =========================================================================
    // Update Data Owner 
    // =========================================================================
    public function update(Request $request, $id)
    {
        Owner::where('owner_id', $id)->update($request->all());
        return \response()->json([
            'status' => 201,
            'pesan'  => 'berhasil di update'
        ], 201);
    }
    // =========================================================================
    // Delete Data 
    // =========================================================================
    public function delete($id)
    {
        $owner = Owner::where('owner_id', $id)->delete();
        if ($owner == TRUE) {
            return \response()->json([
                'status'    =>  410,
                'pesan'     => 'berhasil di hapus'
            ], 401);
        }
    }
}
