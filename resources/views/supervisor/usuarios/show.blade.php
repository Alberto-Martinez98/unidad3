@extends("layouts.plantilla")

@section('contenido')
<div class="row">
  <!-- Content Column -->
    <div class="col-lg-6 mb-4 text-center">
  <!-- Project Card Example -->
     <div class="card shadow mb-6">
            <div class="card-header ">
                <h6 class="m-0 font-weight-bold text-primary">CARNET DE IDENTIFICACION</h6>
            </div>
            <!-- DATOS DEL USUARIO --> 
            <form action="/usuario" method="GET">    
   @csrf
   <h5><small class="text-muted">NOMBRE DEL USUARIO:</small> "{{$usuario->name}}"</h5>
   <br>
   <h5><small class="text-muted">APELLIDO PATERNO:</small> "{{$usuario->a_paterno}}"</h5>
   <br>
   <h5><small class="text-muted">APELLIDO MATERNO:</small> "{{$usuario->a_materno}}"</h5>
   <br>
   <h5><small class="text-muted">CORREO ELECTRONICO:</small> "{{$usuario->email}}"</h5>
   <br>
   <h5><small class="text-muted">FECHA DE INGRESO:</small> "{{$usuario->created_at}}"</h5>
   <br>
   <img src="{{asset('storage').'/'.$usuario->imagen}}" width="250">
<br>
<br>
  <button type="submit" class="btn btn-primary">OK</button>
</form>
      </div>
    </div>
  </div>
@endsection


