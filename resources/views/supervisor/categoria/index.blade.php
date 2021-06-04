
@extends("layouts.plantilla")

@section("contenido")

<h6>
@if($search)
<div class="alert alert-primary" role="alert">
  Los resultados para tu busqueda  '{{$search}}'  son: 
</div>
</h6>
@endif

		<a href="categorisa/create" class="btn btn-primary mb-3">CREAR</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Clave</th>
            <th scope="col">Nombre de Categoria</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Imagen</th>
            <th scope="col">Activo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($categorias as $categoria)
        <tr>
            <td>100{{$categoria->id}}</td>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->descripcion}}</td>
            <td>
              <img src="{{asset('storage').'/'.$categoria->imagen}}" width="150">
            </td>
            <td>{{$categoria->activo}}</td>          
            <td>
                <form action="/categoria/{{$categoria->id}}" method="POST">
                <a href="categoria/{{$categoria->id}}/edit" class="btn btn-info">Editar</a>
                <a href="categoria/{{$categoria->id}}" class="btn btn-success">Mostrar</a>
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