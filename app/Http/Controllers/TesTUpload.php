<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class TesTUpload extends Controller
{


    public function upload(Request $request)
    {
        $path = $request->file('foto'); 
        $exten = $path->getClientOriginalExtension();
        Storage::disk('public')->put($path->getFilename().'.'.$exten , File::get($path));
    }
}
