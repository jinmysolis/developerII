@extends('layouts.master')

@section('title','Ediar Producto')

@section('content')
<ol class="breadcrumb">
    <li><a href="{{url('dashboard')}}">Escritorio</a></li>
    <li><a href="{{url('product')}}">Product</a></li>
    <li class="active">Editar Producto</li>
    
</ol>
<div class="page-header">
     <h2>Productos <small>Edit</small></h2>
   </div>
<div class="panel-body">
<center>{!!Form::model($products,['route'=>['product.update',$products->id],'method'=>'PUT'])!!}

<div class="col-md-6">
    <div class="form-group">
      {!!Form::label('name', 'Nombre')!!}
      {!!Form::text('name', null,['class'=>'form-control'])!!}
     </div>

      <div class="form-group">
      {!!Form::label('price', 'Precio')!!}
      {!!Form::text('price', null,['class'=>'form-control'])!!}
      </div>
 </div>

<div class="col-md-6">
    <div class="form-group">
      {!!Form::label('marks_id', 'Marca')!!}
      {!!Form::select('marks_id',$marks, null,['id'=>'marks_id','class'=>'form-control'])!!}
     </div>

      <div class="form-group">
      <center><button type="submit" class="btn btn-info btn-lg">Editar Producto</button></center>
      </div>
 </div>



     <p>
    
    </p>

   {!!Form::close()!!}</center> 

    
</div>
@endsection

