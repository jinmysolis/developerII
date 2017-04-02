@extends('layouts.master')

@section('title','Lista de Productos')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Crear Nueva Tarea</h3>
              </div>
              <div class="panel-body">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

   <div class="page-header">
     <h1>Población<small> Calles, codigo postal</small></h1>
   </div>

    <div class="panel-body">
        <table class="table table-bordered" id='myTable'>
            <thead>
              <th>Codigo Población</th>
              <th>Nombre </th>
            
            </thead>
            <tbody>
            @foreach($CallesPoblacion as $CallePoblaciones)
                <tr>
                    <td>{{$CallePoblaciones->name}}</td>
                    <td>{{$CallePoblaciones->price}}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
        
 <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

 
  </div>
            </div>
        </div></div>

 
 
<script>
  $(document).ready(function(){
    
    $('#myTable').DataTable();

  });
</script>

@endsection