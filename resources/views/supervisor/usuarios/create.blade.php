@extends("layouts.plantilla")

@section("contenido")

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
    <input id="codigo" name="email" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Comtraseña: </label>
    <input id="codigo" name="password" type="password" class="form-control" tabindex="1">    
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
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection