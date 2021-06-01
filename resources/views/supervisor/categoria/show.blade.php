@extends("layouts.plantilla")

@section("contenido")

<form action="/categoria" method="GET">    
   @csrf
   <h1>Nombre de Categoria:   "{{$categoria->nombre}}"</h1>
   <br>
   <h2>Descripcion:   "{{$categoria->descripcion}}"</h2>
   <br>
   <h2>Activo:   "{{$categoria->activo}}"</h2>
   <br>
   <img src="{{asset('storage').'/'.$categoria->imagen}}" width="250">
<br>
<br>
  <button type="submit" class="btn btn-primary">OK</button>
</form>

@endsection