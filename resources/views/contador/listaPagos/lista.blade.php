
@extends("layouts.plantilla")

@section("contenido")
                @if($consulta)
                <div class="alert alert-success" role="alert">
                  Los resultados para tu busqueda '{{$consulta}}' son: 
                </div>
                @endif
        @if(Auth::user()->rol == "Cliente")
    <a href="producto/create" class="btn btn-primary mb-3">CREAR</a>
        @endif


<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Clave</th>
            <th scope="col">Beneficiario</th>
            <th scope="col">Nota</th>
            <th scope="col">Monto</th>
            <th scope="col">Estatus</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($compras as $compra)
        <tr>
            <td>100{{$compra->id}}</td>
            <td>{{$compra->nombre}}</td>
            <td>{{$compra->nota}}</td>
            <td>{{$compra->monto}}</td>
            @if($compra->comprado == 2)
            <td>No ha sido revisado</td>
            @elseif($compra->comprado == 1)
            <td>Comprobante Aceptado</td>
            @else
            <td>Comprobante Rechazado</td>
            @endif                 
            <td>
                <a href="" class="btn btn-success">Editar</a>
                <a href="" class="btn btn-dark">Entregar</a>
                <a href="" class="btn btn-danger">Eliminar</a>            

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection