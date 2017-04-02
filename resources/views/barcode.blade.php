@extends('layouts.master')

@section('title','Codigo Barra')

@section('content')

<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Generar Codigo de Barra</h3>
              </div> 
              <div class="panel-body">

    @foreach( $producto as $product)
        {{--*/ @$producto = '"'.$product->name.'"' /*--}}

        <div>
            {!! DNS1D::getBarcodeHTML($producto, "C128")!!}
        </div>
        <div style="padding-top: 50px;width: 24%;">
            {{ $product->name }}
        </div>


    @endforeach



</div>
 </div>
</div>
</div>

    <style>
        .code {
            height: 60px !important;
            padding-left: 499 px;
             
        }
    </style>








@endsection

