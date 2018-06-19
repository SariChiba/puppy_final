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

Route::get('/productos', function() {
  return view('productos');
})->name('prod');



// Route::get('/', function () {
//    return view('welcome');
// });

//
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
