<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image; 

class TesTUpload extends Controller
{

    public function __construct()
    {

    }


    public function upload(Request $request)
    {
     
        $image =$request->file('foto'); 
        $nameImage = $request->file('foto')->getClientOriginalName(); 

        $thumbImage = Image::make($image->getRealPath())->resize(600 , 400 ); 
        $thumbPath = public_path().'/uploads/thumb/'.$nameImage; 
        $thumbImage = Image::make($thumbImage)->save($thumbPath);
        
        $oriPath = \public_path().'/uploads/normal/'.$nameImage ; 
        $oriImage = Image::make($image)->save($oriPath); 



       
    }
}
