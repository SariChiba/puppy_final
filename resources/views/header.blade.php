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
            <a class="nav-link py-1 px-0 px-lg-1 ion-ios-paw-outline" href="{{ route('prod') }}">Productos</a>
          </li>
          <li class="nav-item mx-1 mx-lg-1">
            <a class="nav-link py-1 px-0 px-lg-1 ion-ios-paw-outline" href="{{ route('suc') }}">Sucursales</a>
          </li>
          <li class="nav-item mx-1 mx-lg-1">
            <a class="nav-link py-1 px-0 px-lg-1 ion-ios-paw-outline" href="{{ route('faq') }}">Preguntas Frecuentes</a>
          </li>
          <li class="nav-item mx-1 mx-lg-1 active d-flex justify-content">
          </li>
          <li class="nav-item mx-1 mx-lg-1 active d-flex justify-content">

            <a class="nav-link py-1 px-0 px-lg-1 borcua navbar-brand ion-ios-paw-outline" href="/register">Registrate / Iniciar Sesión <span class="sr-only">(current)</span></a>
          </li>

        </ul>

        <!-- <form class="form-inline mt-2 mt-md-0 d-flex justify-content">
          <input class="form-control mr-sm-2" type="text" placeholder="Busca tu producto! " aria-label="Search">
          <button class="btn btn-outline-success" type="submit"></button>
        </form> -->

      </div>
</nav>
