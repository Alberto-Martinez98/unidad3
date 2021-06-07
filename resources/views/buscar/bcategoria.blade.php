
@extends("layouts.plantilla")

@section("contenido")
                @foreach ($categorias as $categoria)
                    <div >
                        <div class="card" style="width: 18rem; height: 20rem; float: left;" >
                          <img src="{{asset('storage').'/'.$categoria->imagen}}" class="card-img-top" alt="..." width="200" height="175">
                          <div class="card-body" style="width: 13rem;">
                            <h5 class="card-title">{{$categoria->nombre}}</h5>
                            <p class="card-text">{{$categoria->descripcion}}</p>
                            <a href="/bcte/{{$categoria->id}}" class="btn btn-primary">Ver Productos</a>
                          </div>
                        </div>
                    </div>
                @endforeach

@endsection