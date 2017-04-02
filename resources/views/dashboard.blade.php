@extends('layouts.master')

@section('title','Panel de Control')

@section('content')

   <ol class="breadcrumb">
     <li>Panel de Control</li>
     <li class="active">Escritorio</li>
   </ol>

   <!-- Main component for a primary marketing message or call to action -->
   <div class="page-header">
     <h1>Busqueda <small>Select</small></h1>
   </div>
<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Busqueda por select 2</h3>
              </div> 
              <div class="panel-body">
       {!! Form::select('product',$product,null,['id'=>'product','class'=>'js-example-responsive','style'=>'width: 50%']) !!}
 </div>
 </div>
</div>
</div>


<script>
  
      $("#product").select2({
      theme: "classic",
     
      // templateSelection: formatState
      });

    function formatState (state)
   {
      if (!state.id) { return state.text; }
      var $state = $(
        '<span><img width=10% src="images/products/' + state.element.value.toLowerCase() + '.jpg" /> ' + state.text + '</span>'
      );
      return $state;
  };



</script>

@endsection
