@extends('layouts.master')

@section('title','Lista de Productos')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   
  <ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Escritorio</a></li>
     <li class="active">Productos</li>
   </ol>
<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">lista de productos</h3>
                
              </div> 
              <div class="panel-body">
            <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id='nuevo'  name='nuevo' class="btn btn-warning navbar-btn" style="margin-bottom: 1px; margin-top: -5px;margin-right: 8px;padding: 3px 20px;">Nuevo</button>
             </p>
   <div class="page-header">
     <h1>Productos <small>Actualizados hasta hoy</small></h1>
   </div>

   

      
        
         
          <div class="panel-body">
               <div id="list-product"></div>


          </div>
     


     
</div>
 </div>
</div>
</div>

<script>


    $(document).ready(function(){
        listProduct();
    });



$(document).on("click",".pagination li a",function(e) {
        e.preventDefault();
        var url = $(this).attr("href");
        $.ajax({
            type:'get',
            url:url,
            success: function(data){
                $('#list-product').empty().html(data);
            }
        });
    });







    $("#nuevo").click(function(event)
  {
      document.location.href = "{{ route('product.create')}}";
  });

  var listProduct = function()
  {
      $.ajax({
          type:'get',
          url:'{{ url('listall')}}',
          success: function(data){
              $('#list-product').empty().html(data);
          }
      });
  }


</script>
  
@endsection
