
@extends("layouts.plantilla")

@section("contenido")
                @if($consulta)
                <div class="alert alert-success" role="alert">
                  Los resultados para tu busqueda '{{$consulta}}' son: 
                </div>
                @endif
                @if(session('mensaje'))
                <div class="alert alert-success" role="alert">
                    {{session('mensaje')}}
                </div>
                @endif

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Clave</th>
            <th scope="col">Nombre del Producto</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria</th>
            <th scope="col">Imagen</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Consignados</th>
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
             <td>{{$producto->cantidad}}</td>
            @if($producto->aceptado == 2)
            <td>No ha sido revisado</td>
            @else
            <td>Rechazado</td>
            @endif          
            <td>
                <form action="#" method="POST">
                <a href="revisar/{{$producto->id}}" class="btn btn-success">Revisar Producto</a>
                @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection