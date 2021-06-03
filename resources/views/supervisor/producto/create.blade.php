@extends("layouts.plantilla")

@section("contenido")

<form action="/producto" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre de producto: </label>
    <input id="codigo" name="nombre" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripcion: </label>
    <input id="codigo" name="descripcion" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio: </label>
    <input id="codigo" name="precio" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen: </label>
    <input id="codigo" name="imagen" type="file" class="form-control" tabindex="1">    
  </div>
  <br>
  <a href="/producto" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection