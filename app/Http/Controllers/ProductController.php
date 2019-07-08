<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(5);
        return view('product')
        ->with('products', $products);
    }

    public function show($id){
        $detail = Product::find($id);
        return view('products.detail')
        ->with('detail', $detail);
    }
}
