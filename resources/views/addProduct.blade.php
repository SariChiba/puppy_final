@extends ('layout')

@section('title', 'Agregar Producto')

@section('content')
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

    @if(count($errors))
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
              <div class="card-header"style="font-size: 2em;font-family: 'Nunito'">{{ __('Agregar Producto') }}</div>
                <div class="card-body"style="background-color:#e8eaef;">

                  <form name="agregarProducto" action="/crearProducto" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}

                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-md-right" style="font-size: 1.7em;font-family: 'Nunito'">{{ __('Producto') }}
                          </label>

                          <div class="col-md-6">
                              <input id="product" type="text" class="form-control{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="{{ old('product') }}">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-md-right" style="font-size: 1.7em;font-family: 'Nunito'">{{ __('Descripción') }}
                          </label>

                          <div class="col-md-6">
                              <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-md-right" style="font-size: 1.7em;font-family: 'Nunito'">{{ __('Precio') }}
                          </label>

                          <div class="col-md-6">
                              <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right"style="font-size: 1.7em;font-family: 'Nunito'">Subí una imagen
                          </label>

                          <div class="col-md-6">
                              <input id="picture" type="file" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture" value="{{old('picture')}}" >
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-sm-4 col-form-label text-md-right" style="font-size: 1.7em;font-family: 'Nunito'">Elegí una Categoría
                          </label>

                          <div class="col-md-6" style="font-size: 1.2em;font-family: 'Nunito'">
                            <select name="category_id" class="col-sm-4 col-form-label text-md-right">
                              @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->description}}</option>
                              @endforeach
                            </select>
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary" style="BORDER:rgb(142, 170, 158); background-color:rgb(142, 170, 158);font-family: 'Nunito';font-size: 2em">
                                  {{ __('Agregar Producto') }}
                              </button>
                          </div>
                      </div>
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
