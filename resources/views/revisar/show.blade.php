@extends("layouts.plantilla")

@section("contenido")


		   <h1>Nombre de Producto:   "{{$producto->nombre}}"</h1>
		   <br>
		   <h2>Descripcion:   "{{$producto->descripcion}}"</h2>
		   <br>
		   <h2>Precio:   "{{$producto->precio}}"</h2>
		   <br>
		   <img src="{{asset('storage').'/'.$producto->imagen}}" width="250">
		<br>
		<br>
<form action="/revisar/{{$producto->id}}" method="post"  enctype="multipart/form-data">    
		@csrf
		@method('PUT')
		<div class="input-group">
		  <span class="input-group-text">Motivo: </span>
		  <textarea class="form-control" name="motivo" aria-label="With textarea"></textarea>
		</div>
	<br>
	<button type="submit" class="btn btn-danger">Rechazar</button>
	<br>
	<br>
</form>
<form action="/revisar/{{$producto->id}}" method="post" enctype="multipart/form-data" style="float: left; margin-right: 15px;">
    @csrf
    @method('PUT')
    <button type="submit" class="btn btn-success">Aceptar</button>
  </form>
<button type="submit" class="btn btn-secondary">Cancelar</button><br><br>
@endsection