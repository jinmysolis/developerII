<?php

namespace App\Http\Controllers\Desktop;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product\Product;

class DashboardController extends Controller
{
    public function index()
    {
         $product = Product::lists('name','id')->prepend('Seleccione');
         return view('dashboard',['product'=>$product]);

    }

    public function modelweb()
    {
         return view('modelweb');

    }
}
