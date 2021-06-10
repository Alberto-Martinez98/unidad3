
@extends("layouts.plantilla")

@section("contenido")
                @foreach ($productos as $producto)
          <div >
            <div class="card" style="width: 18rem; height: 20rem; float: left;" >
              <img src="{{asset('storage').'/'.$producto->imagen}}" class="card-img-top" alt="..." width="200" height="175">
              <div class="card-body" style="width: 13rem;">
                <h5 class="card-title">{{$producto->nombre}}</h5>
                <p class="card-text">{{$producto->descripcion}}</p>
                <p>Precio: {{$producto->precio}}</p> 
                <a href="/detalles/{{$producto->id}}" class="btn btn-primary">Ver mas</a>
              </div>
            </div>
          </div>
        @endforeach
@endsection