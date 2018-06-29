<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/preguntas', function() {
  return view('preguntas');
})->name('faq');

Route::get('/sucursales', function() {
  return view('sucursales');
})->name('suc');

// Route::get('/categorias', function() {
//   return view('categorias');
// })->name('categ');

Route::get('/categorias','CategoryController@index')->name('categ');

Route::get('/categorias/{id}','CategoryController@traerProductos');

Route::get('/crearProducto','ProductController@showAddProduct')->name('createPdto')->middleware('auth');

Route::post('/crearProducto','ProductController@createProduct');

Route::get('/productos','ProductController@showProduct')->name('Pdto')->middleware('auth');

Route::get('/producto/{id}','ProductController@showEditProduct')->middleware('auth');

Route::put('/producto/{id}','ProductController@edit');

Route::delete('/producto/delete/{id}','ProductController@borrar')->middleware('auth');

Auth::routes();

// Route::get('perfil/{id}','PerfilController@update');

//Route::get('/registracion,'HomeController@index')

// Route::get('/login', function() {
//  return view('login');
// })->name('login');
//
// Route::get('/register', function() {
//  return view('register');
// })->name('register');


// Route::get('/', function () {
//    return view('welcome');
// });


//Route::get('/home', 'HomeController@index')->name('home');
