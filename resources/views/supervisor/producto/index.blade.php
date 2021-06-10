
@extends("layouts.plantilla")

@section("contenido")
                @if($consulta)
                <div class="alert alert-success" role="alert">
                  Los resultados para tu busqueda '{{$consulta}}' son: 
                </div>
                @endif

		<a href="producto/create" class="btn btn-primary mb-3">CREAR</a>


<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Clave</th>
            <th scope="col">Nombre del Producto</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria</th>
            <th scope="col">Imagen</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($productos as $producto)
        <tr>
            <td>100{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
             <td>{{$producto->categoria_id}}</td>
            <td>
              <img src="{{asset('storage').'/'.$producto->imagen}}" width="150">
            </td>
            <td>{{$producto->precio}}</td>          
            <td>
                <form action="/producto/{{$producto->id}}" method="POST">
                <a href="producto/{{$producto->id}}/edit" class="btn btn-info">Editar</a>
                <a href="producto/{{$producto->id}}" class="btn btn-success">Mostrar</a>
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