@extends("layouts.plantilla")

@section("contenido")

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


@guest
<!-- registro de un usuario anonimo-->
<form action="/registro" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre del Usuario: </label>
    <input id="codigo" name="name" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Paterno: </label>
    <input id="codigo" name="a_paterno" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Materno: </label>
    <input id="codigo" name="a_materno" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo: </label>
    <input id="codigo" name="email" id="email" type="text" class="form-control" tabindex="1">  
    <span id="error_email"></span>  
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contraseña: </label>
    <input id="codigo" name="password" id="password" type="password" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Repetir Contraseña: </label>
    <input id="codigo" name="password2" type="password" class="form-control" tabindex="1">

  @if(session('error'))
    <div style="color:red;">
        {{session('error')}}
    </div>
  <br>
  @endif

  </div>
  
  <br>
  <div class="mb-3">
    <label for="" class="form-label">Imagen: </label>
    <input id="codigo" name="imagen" type="file" class="form-control" tabindex="1">    
  </div>
  <a href="/" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" name="register" id="register" class="btn btn-primary" tabindex="4">Guardar</button>
  {{ csrf_field() }}
</form>>





@else
<form action="/usuario" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre del Usuario: </label>
    <input id="codigo" name="name" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Paterno: </label>
    <input id="codigo" name="a_paterno" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Materno: </label>
    <input id="codigo" name="a_materno" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo: </label>
    <input id="codigo" name="email" id="email" type="text" class="form-control" tabindex="1">  
    <span id="error_email"></span>   
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contraseña: </label>
    <input id="codigo" name="password" id="password" type="password" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Repetir Contraseña: </label>
    <input id="codigo" name="password2" type="password" class="form-control" tabindex="1">

  @if(session('error'))
    <div style="color:red;">
        {{session('error')}}
    </div>
  <br>
  @endif

  </div>
  <div class="mb-3">
      <label for="activo">Activo</label>
      <select name="activo" id="rol">
          <option>Activo</option>
          <option>Desactivo</option>
      </select>
  </div>
  <br>     
  <div class="mb-3">
      <label for="rol">Tipo de usuario</label>
      <select name="rol" id="rol">
          <option>Supervisor</option>
          <option>Encargado</option>
          <option>Contador</option>
          <option>Cliente</option>
      </select>
  </div>
  <br>
  <div class="mb-3">
    <label for="" class="form-label">Imagen: </label>
    <input id="codigo" name="imagen" type="file" class="form-control" tabindex="1">    
  </div>
  <a href="/usuario" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit"  name="register" id="register" class="btn btn-primary" tabindex="4">Guardar</button>





<!-- comienza la validacion de ajax -->
  <script>
$(document).ready(function(){

$('#email').blur(function(){
 var error_email = '';
 var email = $('#email').val();
 var _token = $('input[name="_token"]').val();
 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 if(!filter.test(email))
 {    
  $('#error_email').html('<label class="text-danger">Correo Invalido</label>');
  $('#email').addClass('has-error');
  $('#register').attr('disabled', 'disabled');
 }
 else
 {
  $.ajax({
   url:"{{ route('email_available.check') }}",
   method:"POST",
   data:{email:email, _token:_token},
   success:function(result)
   {
    if(result == 'unique')
    {
     $('#error_email').html('<label class="text-success">Correo electronico no disponible</label>');
     $('#email').removeClass('has-error');
     $('#register').attr('disabled', false);
    }
    else
    {
     $('#error_email').html('<label class="text-danger">Correo electronico no disponible</label>');
     $('#email').addClass('has-error');
     $('#register').attr('disabled', 'disabled');
    }
   }
  })
 }
});

});
</script>

  @endguest   

@endsection