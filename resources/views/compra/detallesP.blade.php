@extends("layouts.plantilla")

@section('contenido')
<br>
<div class="row">
  <h5 class="card-header">DETALLES DEL PRODUCTO</h5>
  <div class="card-body">
  @foreach ($productos as $producto)

<div class="card-header" style="width: 30rem; height: 37rem; float: left;" >
  <img src="{{asset('storage').'/'.$producto->imagen}}" class="card-img-top" alt="..." width="170" height="250"><br>
    <p class="card-text"> Nombre del Producto: "{{$producto->nombre}}"</p>
    <p class="card-text">Detalles del producto: "{{$producto->descripcion}}"</p>
    <p class="card-text">Precio Unitario  : "{{$producto->precio}}"</p>
    <p class="card-text">Cantidad de Producto Disponible: "{{$producto->cantidad}}"</p>
    <p class="card-text">Vendedor: "{{$producto->user_id}} " </p>
    <p class="card-text">Categoria: "{{$producto->categoria_id}}" </p>
    
    <a href="/compra/{{$producto->id}}" class="btn btn-primary">comprar ahora</a>
   
  </div>
  </div><br>
  <hr style="color: #0056b2;" />
  <h5 class="card-title">PREGUNTA ACERCA DEL PRODUCTO</h5><br>

<form action="/preguntar/{{$producto->id}}" method="post" enctype="multipart/form-data">
  @csrf
   @method('put')
<div class="input-group mb-3">
  <input type="text" name="pregunta" class="form-control" placeholder="Escribe tu pregunta..." aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
  <button type="submit" class="btn btn-primary" tabindex="4">Preguntar</button>
  </div>
</div>
</div>
</form>
  @endforeach
  <br>
  <br>
<tt><h6 class="card-title" style="background-color: yellow;">TODAS LAS PREGUNTAS Y RESPUESTAS QUE SE HA REALIZADO A ESTE PRODUCTO</h6></tt>
  @foreach($preguntas as $pregunta)
          <hr>
          <div>
            <h6>PREGUNTA: {{$pregunta->pregunta}}:</h6>
            Respuesta: {{$pregunta->respuestas}}
            <br>
          </div>
  @endforeach
  <br>
  <br> 
  
@endsection


