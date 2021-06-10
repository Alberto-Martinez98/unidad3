@extends("layouts.plantilla")

@section('contenido')
<br>
<div class="row">
  <h5 class="card-header">DETALLES DEL PRODUCTO</h5>
  <div class="card-body">
  @foreach ($productos as $producto)

<div class="card-header" style="width: 30rem; height: 25rem; float: left;" >
  <img src="{{asset('storage').'/'.$producto->imagen}}" class="card-img-top" alt="..." width="200" height="175"><br>
    <p class="card-text"> Nombre del Producto: "{{$producto->nombre}}"</p>
    <p class="card-text">Detalles del producto: "{{$producto->descripcion}}"</p>
    <p class="card-text">Precio: "{{$producto->precio}}"</p>
    <p class="card-text">Vendedor: " " </p>
    <p class="card-text">Categoria: " " </p>

    <a href="/compra" class="btn btn-primary">comprar ahora</a>
   
  </div>
  </div><br>
  <hr style="color: #0056b2;" />
  <h5 class="card-title">Preguntas y Respuestas</h5><br>


  <form action="" action="">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Escribe tu pregunta..." aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
  <a href="#" class="btn btn-primary">Preguntar</a>
  </div>
</div>
</form>
</div>

  @endforeach
  
@endsection


