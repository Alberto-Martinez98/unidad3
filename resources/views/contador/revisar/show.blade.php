@extends("layouts.plantilla")

@section("contenido")


		   <h1>Nombre de quien recibira el producto:   "{{$compra->nombre}}"</h1>
		   <br>
		   <h2>Direccion:   "{{$compra->direccion}}"</h2>
		   <br>
		   <h2>Telefono:   "{{$compra->telefono}}"</h2>
		   <br>
		   <img src="{{asset('storage').'/'.$compra->imagen}}" width="250">
		<br>
		<br>
<form action="/validar/{{$compra->id}}" method="post"  enctype="multipart/form-data">    
		@csrf
		@method('PUT')
		<div class="input-group">
		  <span class="input-group-text">Motivo: </span>
		  <textarea class="form-control" name="motivo" aria-label="With textarea" required></textarea>
		</div>
	<br>
	<button type="submit" class="btn btn-danger">Rechazar</button>
	<br>
	<br>
</form>
<form action="/validar/{{$compra->id}}" method="post" enctype="multipart/form-data" style="float: left; margin-right: 15px;">
    @csrf
    @method('PUT')
    <button type="submit" class="btn btn-success">Aceptar</button>
  </form>
<a href="/pagos" class="btn btn-secondary" tabindex="5">Cancelar</a>
@endsection