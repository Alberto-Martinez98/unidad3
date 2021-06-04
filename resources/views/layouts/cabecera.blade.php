<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <img src="{{asset('storage').'/'.Auth::user()->imagen}}" width="60" height="50">
         <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/perfil" style="text-transform: uppercase;">{{Auth::user()->rol}}  ({{Auth::user()->name}})</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

       <!-- <input class="form-control form-control-dark w-100" name="search" type="search" placeholder="Buscar" aria-label="Search">
       -->
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
            <form action="/salir" method="post">
              @csrf
             <button type="submit" class="btn btn-dark" tabindex="4">Cerrar Sesion</button>
            </form>
          </li>
        </ul>

    </header>
   
  
<!-- boton de pureba para buscador
    <div class="input-group">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" />
    <label class="form-label" for="form1">Buscar</label>
  </div>
  <button type="button" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>-->