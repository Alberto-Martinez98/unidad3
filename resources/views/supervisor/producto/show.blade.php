@extends("layouts.plantilla")

@section("contenido")

<form action="/producto" method="GET">    
   @csrf
   <h1>Nombre de Producto:   "{{$producto->nombre}}"</h1>
   <br>
   <h2>Descripcion:   "{{$producto->descripcion}}"</h2>
   <br>
   <h2>Precio:   "{{$producto->precio}}"</h2>
   <br>
   <img src="{{asset('storage').'/'.$producto->imagen}}" width="250">
<br>
<br>
  <button type="submit" class="btn btn-primary">OK</button>
</form>

@endsection