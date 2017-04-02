<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Product\Product;

class BarcodeController extends Controller
{
    public function index()
    {
        $producto = Product::all(["name","price"]);
        return view('barcode')->with('producto',$producto);
    }
}
