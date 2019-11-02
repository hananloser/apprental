<?php

namespace App\Http\Controllers;

use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function getOwnerWithCar()
    {
        $getDataWithOwner = Owner::all()
            ->load('cars');
        return response($getDataWithOwner, 200)
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-With-Requests'=> 'XMLHttpRequests'
            ])->cookie('hanan');
    }
}
