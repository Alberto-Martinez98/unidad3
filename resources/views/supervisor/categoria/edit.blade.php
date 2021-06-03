@extends("layouts.plantilla")

@section("contenido")

<form action="/categoria/{{$categoria->id}}" method="post" enctype="multipart/form-data">    
   @csrf
   @method('put')

      <div class="mb-3">
    <label for="" class="form-label">Nombre de Categoria:</label>
    <input id="codigo" name="nombre" type="text" class="form-control" value="{{$categoria->nombre}}">    
  </div>

<div class="mb-3">
    <label for="" class="form-label">Descripcion:</label>
    <input id="codigo" name="descripcion" type="text" class="form-control" value="{{$categoria->descripcion}}">    
  </div>

  <div class="mb-3">
    <label for="activo">Activo:</label> 
    <select name="activo" id="activo">
      @if($categoria->activo =="Activo")
          <option selected>Activo</option>
      @else
          <option>Activo</option>
      @endif
      @if($categoria->activo =="Desactivo")
          <option selected>Desactivo</option>
      @else
          <option>Desactivo</option>
      @endif
    </select>  
  </div>

<div class="mb-3">
    <label for="" class="form-label">Imagen:</label>
    <br>
     <img src="{{asset('storage').'/'.$categoria->imagen}}" width="200">
    <br>
    <input id="codigo" name="imagen" type="file" class="form-control" value="">    
</div>

  <a href="/categoria" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection