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


Route::get('/listProducts','productController@index');
/*Route::get('/detailProduct/{id}','productController@show');*/

// ABM Productos

Route::get('/adminProducts','AdminProductController@index');
Route::get('/createProduct','AdminProductController@create');
Route::post('/saveProduct','AdminProductController@save');
Route::get('/deleteProduct/{id}','AdminProductController@delete');
Route::get('/detailProduct/{id}','productController@show');
Route::get('/editProduct/{id}', 'AdminProductController@edit');
Route::patch('/editProduct/{id}', 'AdminProductController@update');

// Compra Productos - Cart

Route::get('/cart', 'cartController@index');

Route::get('/Sales','AdminSaleController@index');
Route::post('/saveSales','AdminSaleController@save');
Route::get('/deleteSales/{id}','AdminSaleController@delete');


// Detalle Producto 
Route::get('/detalleProducto/{id}','productController@show');

