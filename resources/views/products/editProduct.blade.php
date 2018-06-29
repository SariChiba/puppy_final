<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Producto</title>
  </head>
  <body>

    <form "editarProducto" action="/productos" method="POST">
      @csrf
      {{ method_field('PUT') }}

      <div>
          <label for="producto">Producto</label>
          <input type="text" name="product" value="{{old('product')}}" />
      </div>
      <div>
          <label for="description">Descripción</label>
          <input type="text" name="description" value="{{old('description')}}" />
      </div>
      <div>
          <label for="price">Precio</label>
          <input type="text" name="price" value="{{old('price')}}" />
      </div>
      {{-- <div>
          <label for="picture">Imagen</label>
          <input type="file" name="picture" value="{{old('picture')}}" />
      </div> --}}
      <div>
        <select name="category_id">
          @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->description}}</option>
          @endforeach
        </select>
      </div>

      <input type="submit" value="Editar"/>
    </form>

  </body>
</html>
