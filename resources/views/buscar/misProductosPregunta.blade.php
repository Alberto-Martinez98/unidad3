@extends("layouts.plantilla")

@section('contenido')
<br>
<div class="row">
  <h5 class="card-header">DETALLES DEL PRODUCTO</h5>
  <div class="card-body">
  @foreach ($productos as $producto)

<div class="card-header" style="width: 30rem; height: 30rem; float: left;" >
  <img src="{{asset('storage').'/'.$producto->imagen}}" class="card-img-top" alt="..." width="170" height="250"><br>
    <p class="card-text"> Nombre del Producto: "{{$producto->nombre}}"</p>
    <p class="card-text">Detalles del producto: "{{$producto->descripcion}}"</p>
    <p class="card-text">Precio: "{{$producto->precio}}"</p>
    <p class="card-text">Vendedor: " " </p>
    <p class="card-text">Categoria: " " </p>
   
  </div>
  </div><br>
  <hr style="color: #0056b2;" />
  <h5 class="card-title">RESPONDER PREGUNTAS</h5>
  @endforeach
  <br>
  <tt><h6 class="card-title" style="background-color: yellow;">TODAS LAS PREGUNTAS QUE SE HA REALIZADO A ESTE PRODUCTO</h6></tt>
  @foreach($preguntas as $pregunta)
          <hr>
          <div>
            <h6>PREGUNTA: {{$pregunta->pregunta}}:</h6>
            Respuesta: {{$pregunta->respuestas}}
            <br>
          </div>

          <form action="/responder/{{$pregunta->id}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
        <div class="input-group mb-3">
          <input type="text" name="respuesta" class="form-control" placeholder="Escribe tu pregunta..." aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
          <button type="submit" class="btn btn-success" tabindex="4">Responder</button>
          </div>
        </div>
        <br>
        <br>
        </form>
  @endforeach
  
@endsection


