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
                  <a class="nav-link" aria-current="page" href="/dashboard">
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
                  <a class="nav-link" href="/revisar">
                    <span data-feather="eye"></span>
                    Revisar Producto
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
                  <a class="nav-link" href="/pagos">
                    <span data-feather="check-square"></span>
                    Validar Pagos
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/lista">
                    <span data-feather="plus-circle"></span>
                    Nuevo Pago
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/verpagos">
                    <span data-feather="list"></span>
                    Lista de Pagos
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
                  <a class="nav-link" aria-current="page" href="dashboard">
                    <span data-feather="home"></span>
                    Inicio
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/producto">
                    <span data-feather="box"></span>
                    Todos Mis   Productos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/comprar">
                    <span data-feather="shopping-cart"></span>
                    Comprar Productos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/misproductos">
                    <span data-feather="help-circle"></span>
                    Preguntas de mi Producto
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