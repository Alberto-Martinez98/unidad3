@extends("layouts.plantilla")

@section("contenido")
@switch(Auth::user()->rol)
@case( 'Supervisor' )
<div style="float: left; width: 700px;">

      <form action="/updateperfil/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">    
         @csrf
         @method('put')
         <div style="text-align: center;">DATOS PERSONALES</div>
         
            <div class="mb-3">
          <label for="" class="form-label">Nombre del usuario:</label>
          <input id="codigo" name="name" type="text" class="form-control" value="{{Auth::user()->name}}">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Apellido Paterno:</label>
          <input id="codigo" name="a_paterno" type="text" class="form-control" value="{{Auth::user()->a_paterno}}">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Apellido Materno:</label>
          <input id="codigo" name="a_materno" type="text" class="form-control" value="{{Auth::user()->a_materno}}">    
        </div>

      <div class="mb-3">
          <label for="" class="form-label">Correo:</label>
          <input id="codigo" name="email" type="text" class="form-control" value="{{Auth::user()->email}}">    
        </div>

      <div class="mb-3">
          <label for="rol">Tipo de usuario:</label> 
          <select name="rol" id="rol">
            @if(Auth::user()->rol =="Supervisor")
                <option selected>Supervisor</option>
            @else
                <option>Supervisor</option>
            @endif
            @if(Auth::user()->rol =="Encargado")
                <option selected>Encargado</option>
            @else
                <option>Encargado</option>
            @endif
            @if(Auth::user()->rol =="Contador")
                <option selected>Contador</option>
            @else
                <option>Contador</option>
            @endif
            @if(Auth::user()->rol =="Cliente")
                <option selected>Cliente</option>
            @else
                <option>Cliente</option>
            @endif
          </select>  
        </div>

      <div class="mb-3">
          <label for="activo">Activo:</label> 
          <select name="activo" id="activo">
            @if(Auth::user()->activo =="Activo")
                <option selected>Activo</option>
            @else
                <option>Activo</option>
            @endif
            @if(Auth::user()->activo =="Desactivo")
                <option selected>Desactivo</option>
            @else
                <option>Desactivo</option>
            @endif
          </select>  
        </div>

      <div class="mb-3">
          <label for="" class="form-label">Imagen:</label>
          <br>
           <img src="{{asset('storage').'/'.Auth::user()->imagen}}" width="200">
          <br>
          <input id="codigo" name="imagen" type="file" class="form-control" value="">    
        </div>



        <a href="/perfil" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
</div>
<br>
<div style="float: right; margin-right:40px;">
     <form action="/password/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">    
         @csrf
         @method('put')
         <div style="text-align: center;">CAMBIAR CONTRASEÑA</div>
      <div class="mb-3">
          <label for="" class="form-label">Contraseña Actual:</label>
          <input id="codigo" name="passwordactual" type="password" class="form-control" tabindex="1" required>    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nueva Contraseña: </label>
          <input id="codigo" name="password" type="password" class="form-control" tabindex="1" required>

        @if(session('error'))
          <div style="color:red;">
              {{session('error')}}
          </div>
        <br>
        @endif
        <br>
        <a href="#" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
</div>
@break
@default
<div style="float: left; width: 700px;">

      <form action="/updateperfil/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">    
         @csrf
         @method('put')
         <div style="text-align: center;">DATOS PERSONALES</div>
         
            <div class="mb-3">
          <label for="" class="form-label">Nombre del usuario:</label>
          <input id="codigo" name="name" type="text" class="form-control" value="{{Auth::user()->name}}">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Apellido Paterno:</label>
          <input id="codigo" name="a_paterno" type="text" class="form-control" value="{{Auth::user()->a_paterno}}">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Apellido Materno:</label>
          <input id="codigo" name="a_materno" type="text" class="form-control" value="{{Auth::user()->a_materno}}">    
        </div>

      <div class="mb-3">
          <label for="" class="form-label">Correo:</label>
          <input id="codigo" name="email" type="text" class="form-control" value="{{Auth::user()->email}}">    
        </div>

      <div class="mb-3">
          <label for="" class="form-label">Imagen:</label>
          <br>
           <img src="{{asset('storage').'/'.Auth::user()->imagen}}" width="200">
          <br>
          <input id="codigo" name="imagen" type="file" class="form-control" value="">    
        </div>



        <a href="/perfil" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
</div>
<br>
<div style="float: right; margin-right:40px;">
     <form action="/password/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">    
         @csrf
         @method('put')
         <div style="text-align: center;">CAMBIAR CONTRASEÑA</div>
      <div class="mb-3">
          <label for="" class="form-label">Contraseña Actual:</label>
          <input id="codigo" name="passwordactual" type="password" class="form-control" tabindex="1">    
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nueva Contraseña: </label>
          <input id="codigo" name="password" type="password" class="form-control" tabindex="1">

        @if(session('error'))
          <div style="color:red;">
              {{session('error')}}
          </div>
        <br>
        @endif
        <br>
        <a href="#" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
</div>
@endswitch
@endsection