<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class imageController extends Controller
{
    public function index ()
    {
        return view('image.index');
    }
    
    public function uploadImage ()
    {
        $file = Input::file('image');
        $random = str_random(10);
        $nombre = $random.'-'.$file->getClientOriginalName();
        $path = public_path('uploads/'.$nombre);
        $url = '/uploads/'.$nombre;
        $image = Image::make($file->getRealPath());
        $image->save($path);
        
        return '<img src="'.$url.'"/>';
        
      
        
        
    }
    
    
}
