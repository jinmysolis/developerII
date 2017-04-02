@extends('layouts.master')

@section('title','Producto nuevo')

@section('content')
<ol class="breadcrumb">
    <li><a href="{{url('dashboard')}}">Escritorio</a></li>
    <li><a href="{{url('product')}}">Product</a></li>
    <li class="active">Nuevo Producto</li>
    
</ol>
<div class="page-header">
     <h1>Productos <small>Nuevo</small></h1>
   </div>
<div class="panel-body">
<center>{!!Form::open(['route'=>'product.store','method'=>'POST'])!!}

<div class="col-md-6">
    <div class="form-group">
      {!!Form::label('name', 'Nombre')!!}
      {!!Form::text('name', null,['class'=>'form-control',' placeholder'=>'Nombre del Articulo'])!!}
     </div>

      <div class="form-group">
      {!!Form::label('price', 'Precio')!!}
      {!!Form::text('price', null,['class'=>'form-control',' placeholder'=>'introduca el Precio'])!!}
      </div>
 </div>

<div class="col-md-6">
    <div class="form-group">
      {!!Form::label('marks_id', 'Marca')!!}
      {!!Form::select('marks_id',$marks, null,['id'=>'marks_id','class'=>'form-control'])!!}
     </div>

      <div class="form-group">
      <center><button type="submit" class="btn btn-info btn-lg">Crear Producto</button></center>
      </div>
 </div>



     <p>
    
    </p>

   {!!Form::close()!!}</center> 

    
</div>
@endsection

