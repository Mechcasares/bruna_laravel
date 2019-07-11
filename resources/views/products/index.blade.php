@extends('layouts.master')
@section('content')
<div class="adminProducts">
  <div class="adminProductsContainer">
    <div class="detailTitle">
    <h2>ABM DE PRODUCTOS</h2>
    </div>
    <a class="productsBtns" href="/createProduct">AGREGAR PRODUCTO +</a>    
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>NOMBRE DEL PRODUCTO</th>
                <th>VER</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($products as $product)
                <tr>
                <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    
                
                    <td><a class="productsBtns" href="/detailProduct/{{$product->id}}"><i class="fa fa-eye"></i></a></td>
                    <td><a class="productsBtns" href="/editProduct/{{$product->id}}"><i class="fa fa-edit"></i></a></td>    
                    <td><a class="productsBtns" href="/deleteProduct/{{$product->id}}"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
    </div>
    </div>
@endsection