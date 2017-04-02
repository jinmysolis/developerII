@extends('layouts.master')

@section('title','Ediar Producto')

@section('content')
<ol class="breadcrumb">
    <li><a href="{{url('dashboard')}}">Escritorio</a></li>
    <li><a href="{{url('product')}}">Product</a></li>
    <li class="active">Eliminar Producto</li>
    
</ol>
<div class="page-header">
     <h2>Productos <small>Eliminar</small></h2>
   </div>
<div class="panel-body">
{!!Form::open(['route'=>['product.destroy',$products->id],'method'=>'DELETE'])!!}

<div class="col-md-6">
    <div class="form-group">
      {!!Form::label('name', 'Producto')!!}
      {!!$products->name!!}
     </div>

      <div class="form-group">
      {!!Form::label('name', 'Precio')!!}
      {!!$products->price!!}
     </div>
 
    {!!Form::submit('eliminar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Eliminar</span>','class'=>'btn btn-danger btn-lg', 'onclick'=>"return confirm('Seguro desea eliminar')"])!!}

     
   
     
    
 </div>



    

   {!!Form::close()!!}</center> 

    
</div>
@endsection

