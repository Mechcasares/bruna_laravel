<?php

use Illuminate\Http\Request;

Auth::routes();


Route::get('/', function(){
    return view('bruna');
});

Route::get('/faqs', function(){
    return view('faqs');
});


Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/listadoProductos','productController@index');
// Route::get('/detalleProducto/{id}','productController@show');
Route::get('/movies/create', 'MovieController@create')->middleware('admin');

// ABM Productos
Route::get('/adminProducts','AdminProductController@index');
Route::get('/createProduct','AdminProductController@create');
Route::post('/saveProduct','AdminProductController@save');
Route::get('/deleteProduct/{id}','AdminProductController@delete');

// Compra Productos - Cart

Route::get('/cart', function(){
    return view('cart');
});

Route::get('/Sales','AdminSaleController@index');
Route::post('/saveSales','AdminSaleController@save');
Route::get('/deleteSales/{id}','AdminSaleController@delete');


// Detalle Producto 
Route::get('/detalleProducto/{id}','productController@show');

