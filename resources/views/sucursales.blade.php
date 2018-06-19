@extends ('layout')

@section('title', 'Sucursales')

@section('content')

  <div class="margen">

    <div class="barraTitulo">
      <h3>Nuestras Sucursales</h3>
    </div>

  <div class="row d-flex flex-wrap justify-content-center">

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Microcentro</h4>
      <img src="images/sucursal1.jpg" class="img-fluid" alt="">
      <p class="card-text">
        <ul>
            <li>Dirección: Av. del Libertador 2166, C1425AAU CABA</li>
            <li>Teléfono: 011 4806-0372</li>
            <br>
            <li><a href="#!" class="card-link alling">¿Cómo llegar?</a></li>
        </ul>
      </p>
    </div>
  </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Belgrano</h4>
      <img src="images/sucursal5.jpg" class="img-fluid" alt="">
      <p class="card-text">
        <ul>
          <li>Dirección: Av. Las Heras 3001/11, D1425CDN CABA </li>
          <li>Teléfono: 011 4809-1100</li>
          <br>
          <li><a href="#!" class="card-link">¿Cómo llegar?</a></li>
        </ul>
      </p>
    </div>
  </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Recoleta</h4>
      <img src="images/sucursal3.jpg" class="img-fluid" alt="">
      <p class="card-text">
        <ul>
          <li>Dirección: Lavalle 458, C1425DNU CABA</li>
          <li>Teléfono: 011 4346-4800</li>
          <br>
          <li><a href="#!" class="card-link">¿Cómo llegar?</a></li>
        </ul>
      </p>
    </div>
    </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Palermo</h4>
      <img src="images/sucursal4.jpg" class="img-fluid" alt="">
      <p class="card-text">
        <ul>
          <li>Dirección: Peña 3176, C1425AVN CABA</li>
          <li>Teléfono: 011 4255 0349</li>
          <br>
          <li><a href="#!" class="card-link">¿Cómo llegar?</a></li>
        </ul>
      </p>
    </div>
    </div>

  </div>

  </div>
@endsection
