<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi as Trans;
class Transaksi extends Controller
{
    
    /**
     * @param id
     * @request dari Facades Request 
     * @return [json]
     */
    public function addTrans(){ 
        $trans = new Trans() ; 
    }
}
