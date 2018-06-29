<nav class="navbar navbar-expand-lg  navbar-dark fixed-top bg-green d-flex">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="logo">
      <a class="navbar-brand ion-ios-paw-outline" href="/">PuppyShop</a>
      <a class="navbar-brand ion-social-facebook-outline" href="#"></a>
      <a class="navbar-brand ion-social-instagram-outline" href="#"></a>
    </div>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-1 mx-lg-1">
            @guest
            <a class="nav-link py-1 px-0 px-lg-1 ion-ios-paw-outline" href="{{ route('categ') }}">Categorias</a>
          </li>
          <li class="nav-item mx-1 mx-lg-1">
            <a class="nav-link py-1 px-0 px-lg-1 ion-ios-paw-outline" href="{{ route('suc') }}">Sucursales</a>
          </li>
          <li class="nav-item mx-1 mx-lg-1">
            <a class="nav-link py-1 px-0 px-lg-1 ion-ios-paw-outline" href="{{ route('faq') }}">FAQ</a>
          </li>
          <li class="nav-item mx-1 mx-lg-1 active d-flex justify-content">
          </li>
          <li class="nav-item mx-1 mx-lg-1 active d-flex justify-content">
            {{-- @guest --}}
              <a class="nav-link py-1 px-0 px-lg-1 borcua navbar-brand ion-ios-paw-outline" href="/register">Registrate<span class="sr-only">(current)</span></a>
              <a class="nav-link py-1 px-0 px-lg-1 borcua navbar-brand ion-ios-paw-outline" href="/login"> Iniciar Sesión <span class="sr-only">(current)</span></a>
            @else
                {{-- <a class="nav-link py-1 px-0 px-lg-1 ion-ios-paw-outline" href="{{ route('Pdto') }}">Productos</a> --}}
                <div class="input-group">
                  <a class="nav-link py-1 px-0 px-lg-1 borcua navbar-brand ion-ios-paw-outline"  data-toggle="dropdown">Productos</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" style="font-size: 1em" href="{{ route('createPdto') }}">Agregar Productos</a>
                    <a class="dropdown-item" style="font-size: 1em" href="/productos">Editar Productos</a>
                  </div>
                </div>
              </li>
              <li class="nav-item mx-1 mx-lg-1">
              <a class="nav-link py-1 px-0 px-lg-1 ion-ios-paw-outline" href="{{ route('categ') }}">Categorias</a>
              {{-- <div class="input-group">
                <a class="nav-link py-1 px-0 px-lg-1 borcua navbar-brand ion-ios-paw-outline"  data-toggle="dropdown">Categorías</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Agregar Productos</a>
                  <a class="dropdown-item" href="#">Editar Productos</a>
                </div>
              </div> --}}
            </li>
            <li class="nav-item mx-1 mx-lg-1">
              <a class="nav-link py-1 px-0 px-lg-1 ion-ios-paw-outline" href="{{ route('suc') }}">Sucursales</a>
            </li>
            <li class="nav-item mx-1 mx-lg-1">
              <a class="nav-link py-1 px-0 px-lg-1 ion-ios-paw-outline" href="{{ route('faq') }}">FAQ</a>
            </li>
            <li class="nav-item mx-1 mx-lg-1 active d-flex justify-content">
            </li>
            <li class="nav-item mx-1 mx-lg-1 active d-flex justify-content"

            >

              <div class="py-1 px-1">
                {{-- {{ Auth::user()->name }} {{ Auth::user()->lastname }} --}}
                <img class="img-rounded" src="/storage/avatars/{{ Auth::user()->avatar }}" width="50">
              </div>

              <form action={{ route('logout') }} method="post">
                @csrf
                <button class="btn btn-success" type="submit">Cerrar Sesión</button>
              </form>
            @endguest

          </li>

        </ul>



        <!-- <form class="form-inline mt-2 mt-md-0 d-flex justify-content">
          <input class="form-control mr-sm-2" type="text" placeholder="Busca tu producto! " aria-label="Search">
          <button class="btn btn-outline-success" type="submit"></button>
        </form> -->

      </div>
</nav>
