@extends('layout');

@section('title', 'Home')

<!-- Carousel -->
<div class="row margen">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/banner.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/banner2.jpg" alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

@section('content')
<div class="contenedor">
  <div class="barraTitulo">
      <h3>Nuestros Clientes</h3>
  </div>

  <div class="row d-flex flex-wrap justify-content-center">

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Rolo</h4>
      <img src="images/perro1.jpg" class="img-fluid" alt="">
    </div>
  </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Tristán</h4>
      <img src="images/gato2.jpg" class="img-fluid" alt="">
    </div>
  </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Rómulo</h4>
      <img src="images/perro2.jpg" class="img-fluid" alt="">
    </div>
    </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Napoleón</h4>
      <img src="images/gato3.jpg" class="img-fluid" alt="">
    </div>
    </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Hércules</h4>
      <img src="images/perro3.jpg" class="img-fluid" alt="">
    </div>
    </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Camilo</h4>
      <img src="images/perro4.jpg" class="img-fluid" alt="">
    </div>
    </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Pinky y Cerebro</h4>
      <img src="images/gato5.jpg" class="img-fluid" alt="">
    </div>
    </div>

    <div class="card col-xs-12 col-sm-5">
    <div class="card-body">
      <h4 class="card-title">Simba</h4>
      <img src="images/perro6.jpg" class="img-fluid" alt="">
    </div>
    </div>

  </div>

</div>
@endsection
