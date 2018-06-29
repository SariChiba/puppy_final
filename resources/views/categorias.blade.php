@extends ('layout')

@section('title', 'Categorias')

@section('content')

<div class="margen">
    <div class="barraTitulo">
      <h3>Categorias</h3>
    </div>

    <div class="row d-flex">
        <div class="col-12 text-center">

          @foreach ($categorias as $categoria)

          {{-- <a href="/categorias/{{$categoria->id}}"><li>{{$categoria->description}}</li></a> --}}

          <form action="/categorias/{{$categoria->id}}" method="get">
            @csrf
            <button type="submit" class="btn btn-success">
              <li>{{$categoria->description}}</li>
            </button>
          </form>

          <br>
          @endforeach

        </div>
    </div>
</div>
@endsection
