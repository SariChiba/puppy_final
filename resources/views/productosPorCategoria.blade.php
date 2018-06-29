@extends ('layout')

@section('title', 'Productos')

@section('content')


  <div class="margen">

    <div class="barraTitulo">
      <h3>{{$category->description}}</h3>
    </div>

    <div class="row d-flex flex-wrap justify-content-center">

      @foreach ($productos as $producto)

      <div class="card br-light col-xs-12 col-sm-5 col-lg-3">

        <img src="/storage/products/{{$producto->picture}}" class="img-fluid" alt="">
        <div class="card-body">
          <p class="price"><strong>Precio: ${{$producto->price}}</strong></p>
          <p class="card-text">{{$producto->description}}</p>
          @guest
            {{-- <form action=/login method="post">
              @csrf
              <button class="btn btn-success" type="submit">Comprar</button>
            </form> --}}
          @else
            <button class="btn btn-success" type="submit">Comprar</button>
          @endguest
          {{-- <button type="button" class="btn btn-success">Comprar</button> --}}
        </div>
      </div>

      @endforeach

    </div>

  </div>
  <br>
  <br>
  <br>
  <div class="">
    {{-- {{$productos->links()}} --}}
  </div>

  @endsection
