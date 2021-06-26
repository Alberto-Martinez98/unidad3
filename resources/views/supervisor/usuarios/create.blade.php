@extends("layouts.plantilla")

@section("contenido")

@guest
<style type="text/css">
  .has-error
      {
        border-color:#cc0000;
        background-color:#ffff99;
      }
</style>
<div class="col-12 col-lg-6 offset-lg-3" style="margin-top: 30px;">
<form action="/registro" id="formulario-registro" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre dela Usuario: </label>
    <input id="codigo" name="name" type="text" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Paterno: </label>
    <input id="codigo" name="a_paterno" type="text" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Materno: </label>
    <input id="codigo" name="a_materno" type="text" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo: </label>
    <input id="email" name="email" type="email" class="form-control" tabindex="1" required>
    <span id="error_email"></span>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contraseña: </label>
    <input id="codigo" name="password" type="password" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Repetir Contraseña: </label>
    <input id="codigo" name="password2" type="password" class="form-control" tabindex="1" required>

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
    <input id="codigo" name="imagen" type="file" class="form-control" tabindex="1" required>    
  </div>
  <a href="/" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit"  class="btn btn-primary" id="registrar" tabindex="4">Guardar</button>
</form>
</div>
@section("script")
<!--    <script>
      
      $('#boton-guardar').click( function() {
        let datos = $('#formulario-registro').serialize();
        
        $.ajax({
          method: 'post',
          url: '/registro',
          data: datos,

          success: function(resp){
            console.log(resp);
          } 
        })


      });

    </script> -->
    <!-- comienza la validacion de ajax -->
<script>
$(document).ready(function(){

$('#email').blur(function(){
    var error_email = '';
    var email = $('#email').val();
    var _token = $('input[name="_token"]').val();
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if($.trim(email).length > 0)
    {
        if(!filter.test(email))
        {       
            $('#error_email').html('<label class="text-danger">Error de Correo</label>');
            $('#email').addClass('has-error');
            $('#registrar').attr('disabled', 'disabled');
        }
        else
        {
            $.ajax({
                url:"/verificarEmail",
                method:"POST",
                data:{email:email, _token:_token},
                success:function(result)
                {
                    if(result == 'disponible')
                    {
                        $('#error_email').html('<label class="text-success">Correo Disponible</label>');
                        $('#email').removeClass('has-error');
                        $('#registrar').attr('disabled', false);
                    }
                    else
                    {
                        $('#error_email').html('<label class="text-danger">Correo no Disponible</label>');
                        $('#email').addClass('has-error');
                        $('#registrar').attr('disabled', 'disabled');
                    }
                }
            })
        }
    }
    else
    {
        $('#error_email').html('<label class="text-danger">correo requerido</label>');
        $('#email').addClass('has-error');
        $('#registrar').attr('disabled', 'disabled');
    }
    
});

});
</script>
@endsection





@else
<form action="/usuario" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre del Usuario: </label>
    <input id="codigo" name="name" type="text" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Paterno: </label>
    <input id="codigo" name="a_paterno" type="text" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Materno: </label>
    <input id="codigo" name="a_materno" type="text" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo: </label>
    <input id="codigo" name="email" type="email" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Contraseña: </label>
    <input id="codigo" name="password" type="password" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Repetir Contraseña: </label>
    <input id="codigo" name="password2" type="password" class="form-control" tabindex="1" required>

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
    <input id="codigo" name="imagen" type="file" class="form-control" tabindex="1" required>    
  </div>
  <a href="/usuario" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  @endguest   

@endsection