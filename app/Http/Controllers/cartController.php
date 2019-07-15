<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class cartController extends Controller
{
    public function index(){
      $products = Product::all();
      return view('cart')->with('products', $products);
    }
}
