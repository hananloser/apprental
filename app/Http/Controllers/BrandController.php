<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    // Headers Passing
    public $headers = [
        'X-With_Request' => 'XMLHttpRequest',
        'Content-Type'   => 'application/json'
    ];
    // Response HTTP
    public $oke = 200;
    public $created = 201;
    public $notFound = 404;
    public $auth  = 401;

    // =========================================================================
    // Get Alll Data Brand
    // =========================================================================
    public function getBrand()
    {
        $brand = Brand::all();
        if (Brand::count() <= 0) {
            return \response()->json([
                'status'    => true,
                'messages'  => 'data tidak di temukan ',
            ], $this->notFound, $this->notFound);
        } else {
            return response()->json([
                'status' => true,
                'data'   => $brand,
            ], $this->oke, $this->headers);
        }
    }
    // =========================================================================
    // Get brand ID
    // =========================================================================

    public function show(Request $request, $id)
    {
        $brand = Brand::where('brand_id', $id)->get();
        if ($brand <= 0) {
            return response()->json([
                'status' => false,
                'status' => 'data tidak di temukan'
            ], $this->notFound, $this->headers);
        } else {
            return response()->json([
                'status'    => true,
                'data'      => $brand->map(function ($data) {
                    return [
                        'model' => $data->model
                    ];
                })
            ], $this->oke, $this->headers);
        }
    }
}
