@extends('layouts.master')
@section('content')
    <h2 class="__ABMProductos">ABM de Productos</h2>
    <br>
    <a href="/createProduct">Agregar Producto</a>    
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre del Producto</th>
               
                <th>Ver</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($products as $product)
                <tr>
                <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    
                
                    <td><a href="/detailProduct/{{$product->id}}">Ver</a></td>
                    <td><a href="/editProduct/{{$product->id}}">Editar</a></td>    
                    <td><a href="/deleteProduct/{{$product->id}}">Eliminar</a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection