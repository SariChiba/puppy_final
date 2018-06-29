<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
  public function index() {
    $categorias = Category::all();
    return view('categorias', compact('categorias'));
  }

  public function traerProductos($id) {
    $category = Category::findOrFail($id);
    $productos = $category->products;
    // $productos = Product::paginate(6);

    return view('productosPorCategoria', compact('productos','category'));
  }

}
