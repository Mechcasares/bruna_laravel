<?php

namespace App\Http\Controllers;


use App\Product;
use App\User;
use App\Cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
   public function index(){
     $products = Product::all();
     return view('cart')->with('products', $products);
   }

   public function mesas(){
    $products = Product::all();
    return view('cartMesas')->with('products', $products);
   }
   public function sillas(){
    $products = Product::all();
    return view('cartSillas')->with('products', $products);
   }
   public function sillones(){
    $products = Product::all();
    return view('cartSillones')->with('products', $products);
   }
   public function accesorios(){
    $products = Product::all();
    return view('cartAccesorios')->with('products', $products);
   }

    public function listProduct ()
    {
        $products = session('cart')['products'];
        return view('cart.listProduct')->with('products', $products);
    }

    public function add($id)
    {
        $product = Product::find($id);

        $choice = [
            'id' => $product->id,
            'titulo' => $product->name, 
            'precio' => $product->price,
            'photopath' => $product->photopath
        ];

        session()->push('cart.products', $choice);

        $limit = 5;
        $products = Product::make()->paginate($limit);
        $losProductos = session()->get('cart.products');

        return redirect('/cart');

    }

}

