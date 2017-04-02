 @if($errors->any())
<div class="alert alert-danger" role="alert">
  
   <p>Por favor corrija los siguientes errores:</p>
     <ul>
       @foreach($errors->all() as $error)
       <li>{{$error}}</li>
       @endforeach
       
     </ul>
   @endif
</div>







@if (Session::has('update'))
<div class="alert alert-success" role='alert'>
    <strong>{{Session::get('update')}}</strong>
</div>
@endif

@if (Session::has('save'))
<div class="alert alert-success" role='alert'>
    <strong>{{Session::get('save')}}</strong>
</div>
@endif

@if (Session::has('delete'))
<div class="alert alert-success" role='alert'>
    <strong>{{Session::get('delete')}}</strong>
</div>
@endif