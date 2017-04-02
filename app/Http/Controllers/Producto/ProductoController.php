<?php

namespace App\Http\Controllers\Producto;

use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\Mark;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Http\Requests\Product\ProductCreateRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return View('product/index');
    }

    public function listall()
    {
        $products = Product::
        select('products.id','products.name as product','price','marks.name as mark')
            ->join('marks','marks.id','=','products.marks_id')
            ->paginate(2);
        return View('product/listall')->with('products',$products);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $marks=Mark::lists('name','id')->prepend('Seleccioname la Marca');
      return view('product.create')->with('marks',$marks);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        Product::create($request->all());
        Session::flash('save','Se ha creado correctamente');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $products = Product::FindOrFail($id);
         return view('product.show')->with('products',$products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $marks=Mark::lists('name','id')->prepend('Seleccioname la Marca');
         $products = Product::FindOrFail($id);
         
         return view('product.edit', array('products'=>$products,'marks'=>$marks));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        $products= Product::FindOrFail($id);
        $input = $request->all();
        $products->fill($input)->save();
        Session::flash('update','Se ha actualizado correctamente');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products= Product::FindOrFail($id);
        $products->delete();
          Session::flash('delete','Se ha borrado correctamente');
        return redirect()->route('product.index');
    }
    
    
    public function photo($id)
    {
        $product = Product::find($id);
        return view('product.photo')->with('product',$product);
    }

    public function update_photo(Request $request)
    {
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(380, 600)->save(public_path('images/products/' . $filename ) );
            $products= Product::find($request->get('id'));
            $products->image = $filename;
            $products->save();
            return view('product.photo')->with('product',$products);
    }
    
    
}
