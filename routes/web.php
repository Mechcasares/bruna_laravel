<?php

use Illuminate\Http\Request;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();


Route::get('/', function(){
    return view('bruna');
});

Route::get('/faqs', function(){
    return view('faqs');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/listadoProductos','productController@index');
Route::get('/detalleProducto/{id}','productController@show');

// ABM Productos
Route::get('/adminProducts','AdminProductController@index');
Route::get('/createProduct','AdminProductController@create');
Route::post('/saveProduct','AdminProductController@save');
Route::get('/deleteProduct/{id}','AdminProductController@delete');
