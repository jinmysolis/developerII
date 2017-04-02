<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Http\Requests;
use App\Models\Poblacion\CallesPoblaciones;

class PoblacionController extends Controller
{
    public function index()
    {
      
        $CallesPoblacion =Product::all();
         return view('poblacion.index')->with('CallesPoblacion', $CallesPoblacion);
    }
}
