@extends ('layout')

@section('title', 'Todos los Productos')

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Productos</title>
  </head>
  <body>

    <div class="margen">

      <div class="barraTitulo">
        <h3>Todos los Productos</h3>
      </div>

      <div class="row d-flex flex-wrap justify-content-center">

        @foreach ($productos as $producto)

        <div class="card br-light col-xs-12 col-sm-5 col-lg-3">
          <img id="myImg" src="/storage/products/{{$producto->picture}}" class="img-fluid" alt="" style="width:100%;max-width:300px">
          <div class="card-body">
            <p class="price"><strong> Precio: ${{$producto->price}}</strong></p>
            <p class="card-text">{{$producto->description}}</p>

            {{-- <a href="producto/{{$producto->id}}">Editar</a> --}}

            <form action="producto/{{$producto->id}}" method="get">
              @csrf
              <button type="submit" class="btn btn-success">Editar</button>
            </form>
            <br>
            <form action="producto/delete/{{$producto->id}}" method="post">
              @csrf
              {{ method_field('DELETE') }}
              <button type="submit" id="btnBorrar" class="btn btn-success">Borrar</button>
            </form>
            <br>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Ampliar</button>

          </div>
        </div>
        
        @endforeach

      </div>

    </div>
    <br>
    <br>
    <br>

    <div class="col-12 text-center">
      {{$productos->links()}}
    </div>

    <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Imagen</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img id="myImg" src="/storage/products/{{$producto->picture}}" class="img-fluid" alt="" style="width:100%;max-width:300px">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    <script>

      window.onload = function () {

        // var botonBorrar = document.getElementById('btnBorrar');
        //
        // botonBorrar.onclick = function() {
        //   var sure = confirm("Estas seguro de que queres borrar?");
        //     if (!sure){
        //       location = '/poductos';
        //     }
        // };

      }

    </script>

  </body>

</html>

  @endsection
