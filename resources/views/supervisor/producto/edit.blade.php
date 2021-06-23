@extends("layouts.plantilla")

@section("contenido")
@if($producto->motivo)
                <div class="alert alert-danger" role="alert">
                    Motivo por el cual fue rechazado: "{{$producto->motivo}}"
                </div>
@endif

<form action="/producto/{{$producto->id}}" method="post" enctype="multipart/form-data">    
   @csrf
   @method('put')

      <div class="mb-3">
    <label for="" class="form-label">Nombre de producto:</label>
    <input id="codigo" name="nombre" type="text" class="form-control" value="{{$producto->nombre}}">    
  </div>

<div class="mb-3">
    <label for="" class="form-label">Descripcion:</label>
    <input id="codigo" name="descripcion" type="text" class="form-control" value="{{$producto->descripcion}}">    
  </div>
<div class="mb-3">
    <label for="" class="form-label">Precio:</label>
    <input id="codigo" name="precio" type="text" class="form-control" value="{{$producto->precio}}">    
  </div>

 <div class="form-group">
        <label>Categoria:</label>
        <select name="categoria_id">
          @foreach ($categorias as $categoria)
              <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
          @endforeach
        </select>
    </div>
  
<div class="mb-3">
    <label for="" class="form-label">Imagen:</label>
    <br>
     <img src="{{asset('storage').'/'.$producto->imagen}}" width="200">
    <br>
    <input id="codigo" name="imagen" type="file" class="form-control" value="">    
</div>

  <a href="/producto" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection