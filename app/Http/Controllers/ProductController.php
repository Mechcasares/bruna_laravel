<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $productos = Product::paginate(5);
        return view('product')
        ->with('productos', $productos);
    }

    public function show($id){
        $detalle = Product::find($id);
        return view('detailproduct')
        ->with('detalle', $detalle);
    }
}
