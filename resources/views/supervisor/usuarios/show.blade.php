@extends("layouts.plantilla")

@section("contenido")

<form action="/usuario" method="GET">    
   @csrf
   <h1>Nombre del Usuario:   "{{$usuario->name}}"</h1>
   <br>
   <h2>Apellido Paterno:   "{{$usuario->a_paterno}}"</h2>
   <br>
   <h2>Apellido Materno:   "{{$usuario->a_materno}}"</h2>
   <br>
   <h2>Correo:   "{{$usuario->email}}"</h2>
   <br>
   <img src="{{asset('storage').'/'.$usuario->imagen}}" width="250">
<br>
<br>
  <button type="submit" class="btn btn-primary">OK</button>
</form>

@endsection