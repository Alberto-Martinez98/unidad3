@extends("layouts.plantilla")

@section("contenido")

<form action="/categoria" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre de Categoria: </label>
    <input id="codigo" name="nombre" type="text" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripcion: </label>
    <input id="codigo" name="descripcion" type="text" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Imagen: </label>
    <input id="codigo" name="imagen" type="file" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
      <label for="activo">Activo</label>
      <select name="activo" id="rol">
          <option>Activo</option>
          <option>Desactivo</option>
      </select>
  </div>
  <br>
  <a href="/categoria" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection