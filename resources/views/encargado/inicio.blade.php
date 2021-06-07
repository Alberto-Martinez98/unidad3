@extends("layouts.plantilla")

@section("contenido")

<table class="table col-12 table-responsive">
<thead>
    <tr>
        <td>clave</td>
        <td>nombre del producto</td>
        <td>descripcion</td>
        <td>imagen</td>
        <td>precio</td>
        <td>&nbsp;</td>
    </tr>
</thead>
<tbody>
    <tr>
    @foreach($encargados as $encargados)
        <td>{{ $encargado->id}}</td>
        <td>{{ $encargado->nombre}}</td>
        <td>{{ $encargado->descripcion}}</td>
        <td>{{ $encargado->precio}}</td>
        <td>{{ $encargados->imagen}}</td>
        <td>
            <button class="btn btn-round"><i class="fa fa-trash"></i></button>
        </td>
    @endforeach
    </tr>
</tbody>

</table>


@endsection