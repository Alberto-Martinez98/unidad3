@switch(Auth::user()->rol)
@case( 'Supervisor' )
      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    Inicio
                  </a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="/usuario">
                    <span data-feather="users"></span>
                    Usuarios
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/categoria">
                    <span data-feather="file"></span>
                    Categoria
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/producto">
                    <span data-feather="box"></span>
                    Productos
                  </a>
                </li>         
                 <li class="nav-item">
                  <a class="nav-link" href="/perfil">
                    <span data-feather="user"></span>
                    Perfil
                  </a>
                </li>
              </ul>        
            </div>
          </nav>
@break
@case( 'Encargado' )
      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/encargado">
                    <span data-feather="home"></span>
                    Inicio
                  </a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="/usuario">
                    <span data-feather="users"></span>
                    Usuarios
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/cte">
                    <span data-feather="file"></span>
                    Categoria
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/perfil">
                    <span data-feather="user"></span>
                    Perfil
                  </a>
                </li>
              </ul>        
            </div>
          </nav>
@break
@case( 'Contador' )
      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    Inicio
                  </a>
                </li>        
                 <li class="nav-item">
                  <a class="nav-link" href="/perfil">
                    <span data-feather="user"></span>
                    Perfil
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="c"></span>
                    Validar Pagos
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="list"></span>
                    Listar Pagos
                  </a>
                </li>

              </ul>        
            </div>
          </nav>
@break
@case( 'Cliente' )
      <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    Inicio
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/producto">
                    <span data-feather="box"></span>
                    Productos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/comprar">
                    <span data-feather="shopping-cart"></span>
                    Comprar
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span data-feather="help-circle"></span>
                    Preguntas
                  </a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="/perfil">
                    <span data-feather="user"></span>
                    Perfil
                  </a>
                </li>
              </ul>        
            </div>
          </nav>
@break
@endswitch