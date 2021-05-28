
@extends("layouts.plantilla")

@section("contenido")

		<a href="usuario/create" class="btn btn-primary mb-3">CREAR</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Clave</th>
            <th scope="col">Nombre de usuario</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Correo</th>
            <th scope="col">Imagen</th>
            <th scope="col">Activo</th>
            <th scope="col">Rol</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($usuarios as $usuario)
        <tr>
            <td>100{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->a_paterno}}</td>
            <td>{{$usuario->a_materno}}</td>
            <td>{{$usuario->email}}</td>          
            <td>
              <img src="{{asset('storage').'/'.$usuario->imagen}}" width="150">
            </td>
            <td>{{$usuario->activo}}</td>
            <td>{{$usuario->rol}}</td>
            <td>
                <form action="/usuario/{{$usuario->id}}" method="POST">
                <a href="usuario/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>
                <a href="usuario/{{$usuario->id}}" class="btn btn-success">Mostrar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection