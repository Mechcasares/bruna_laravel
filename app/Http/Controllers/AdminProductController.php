<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class AdminProductController extends Controller
{

    public function index(){
        $products = Product::all();
        return view('products.index')->with('products',$products);
    }

    public function create(){
        $categories = Category::all();
        return view('products.create')->with('categories',$categories);
    }

    public function save(Request $request){
        $reglas = [
            'name'=> 'required',
            'price'=>'required|numeric',
            'description'=>'required',
            'photopath'=>'required',
        ];

        $mensajes = [
            'name.required'=>'Este campo es requerido',
            'numeric'=>'Este campo :attribute sólo acepta número',
        ];

        $this->validate($request,$reglas,$mensajes);
        $product = new Product($request->all());
        

        $product->save();
        return redirect('/adminProducts');
        
    }
    
    public function delete($id){
        $productoBorrar = Product::find($id);
        $productoBorrar->delete();
        return redirect('/adminProducts');
    }
}
