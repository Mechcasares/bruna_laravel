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
        $photopath = $request->file('photopath')->store('img', 'public');
        $product = new Product($request->all());


        $product->photopath = $photopath;

        
        $product->save();
        return redirect('/adminProducts');
        
    }

    public function edit($id)
    {
        $categories = Category::all();

        $product = Product::find($id);

        return view('products.edit')
            ->with('product', $product)
            ->with('category', $product->category)
            ->with('categories', $categories);

    }

    public function update(Request $request, $id)
    {
        
        $reglas = [
            'name'=> 'required',
            'price'=>'required|numeric',
            'description'=>'required',
           
        ];

        $mensajes = [
            'name.required'=>'Este campo es requerido',
            'numeric'=>'Este campo :attribute sólo acepta número',
        ];
        
        $this->validate($request, $reglas, $mensajes);
        
        $product = Product::find($id);
        
                    $product->name = $request->input('name') !== $product->name ? $request->input('name') : $product->name;
                    $product->price = $request->input('price') !== $product->price ? $request->input('price') : $product->price;
                    $product->description = $request->input('description') !== $product->description ? $request->input('description') : $product->description;
                    $product->category_id = $request->input('category_id') !== $product->category_id ? $request->input('category_id') : $product->category_id;
                    
         
         $product->save();
        
         return redirect("/detailProduct/" . $product->id);

    }
    
    public function delete($id){
        $productoBorrar = Product::find($id);
        $productoBorrar->delete();
        return redirect('/adminProducts');
    }
}
