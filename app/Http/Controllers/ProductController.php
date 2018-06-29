<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Category;
use App\Product;

class ProductController extends Controller
{

  public function showProduct() {
    $productos = Product::paginate(6);
    return view('productos', compact('productos'));
  }

//   public function __construct() {
//     $this->middleware('admin')->only('addProduct','edit','delete');
// }


  public function showAddProduct(){
    // $categorias = DB::table('category')->get();
    $categorias = Category::All();
    return view('addProduct',compact('categorias'));
  }

  protected function createProduct(Request $request)
  {

      $file = $request->file("picture");
      $imageName = $request['product'] . "." . $file->extension();
      $file->storePubliclyAs("/public/products", $imageName);

      Product::create([
        "product" => $request['product'],
        "description" => $request['description'],
        "price" => $request['price'],
        "picture" => $imageName,
        "category_id" => $request['category_id']
      ]);

      return redirect('/productos');
  }


  public function store(Request $request) {

    $product = $request->product();
    $file = $request->file("picture");
    $name = $product->product . "." . $file->extension();
    $folder = "product";
    $path = $file->storePubliclyAs($folder, $name);
    $product->picture = $path;
    $product->save();

    return redirect('/productos');
  }

  public function showEditProduct($id){
    // $categorias = DB::table('category')->get();
    $product = Product::findOrFail($id);
    $categorias = Category::All();
    return view('editProduct',compact('categorias', 'product'));
  }

  public function edit(Request $request, $id) {

    $product = Product::findOrFail($id);
    $product->fill($request->all());
    $product->save();
    return redirect('/productos');
  }

  public function borrar($id) {
    $product = Product::findOrFail($id);
    $product->delete();
    return redirect('/productos');
  }


}
