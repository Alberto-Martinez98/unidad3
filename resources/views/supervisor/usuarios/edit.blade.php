@extends("layouts.plantilla")

@section("contenido")

<form action="/usuario/{{$usuario->id}}" method="post" enctype="multipart/form-data">    
   @csrf
   @method('put')

      <div class="mb-3">
    <label for="" class="form-label">Nombre del usuario:</label>
    <input id="codigo" name="name" type="text" class="form-control" value="{{$usuario->name}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Paterno:</label>
    <input id="codigo" name="a_paterno" type="text" class="form-control" value="{{$usuario->a_paterno}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido Materno:</label>
    <input id="codigo" name="a_materno" type="text" class="form-control" value="{{$usuario->a_materno}}">    
  </div>

<div class="mb-3">
    <label for="" class="form-label">Correo:</label>
    <input id="codigo" name="email" type="text" class="form-control" value="{{$usuario->email}}">    
  </div>
<div class="mb-3">
    <label for="rol">Tipo de usuario:</label> 
    <select name="rol" id="rol">
      @if($usuario->rol =="Supervisor")
          <option selected>Supervisor</option>
      @else
          <option>Supervisor</option>
      @endif
      @if($usuario->rol =="Encargado")
          <option selected>Encargado</option>
      @else
          <option>Encargado</option>
      @endif
      @if($usuario->rol =="Contador")
          <option selected>Contador</option>
      @else
          <option>Contador</option>
      @endif
      @if($usuario->rol =="Cliente")
          <option selected>Cliente</option>
      @else
          <option>Cliente</option>
      @endif
    </select>  
  </div>

<div class="mb-3">
    <label for="activo">Activo:</label> 
    <select name="activo" id="activo">
      @if($usuario->activo =="Activo")
          <option selected>Activo</option>
      @else
          <option>Activo</option>
      @endif
      @if($usuario->activo =="Desactivo")
          <option selected>Desactivo</option>
      @else
          <option>Desactivo</option>
      @endif
    </select>  
  </div>

<div class="mb-3">
    <label for="" class="form-label">Imagen:</label>
    <br>
     <img src="{{asset('storage').'/'.$usuario->imagen}}" width="200">
    <br>
    <input id="codigo" name="imagen" type="file" class="form-control" value="">    
  </div>



  <a href="/usuario" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection