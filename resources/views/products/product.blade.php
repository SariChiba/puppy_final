@extends ('layout')

@section('title', 'Product')

@section('content')


  <div class="margen">

    <div class="barraTitulo">
      <h3>Nuestras Productos</h3>
    </div>

    <div class="row d-flex flex-wrap justify-content-center">

      @foreach ($productos as $producto)

      <div class="card br-light col-xs-12 col-sm-5 col-lg-3">
        <img src="{{$producto->avatar}}" class="img-fluid" alt="">
        <div class="card-body">
          <p class="price"><strong>{{$producto->price}}</strong></p>
          <p class="card-text">{{$producto->description}}</p>
          <button type="button" class="btn btn-success">Ver producto</button>
        </div>
      </div>

      @endforeach

    </div>

  </div>

  @endsection
