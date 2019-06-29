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
                @foreach ($productos as $producto)
                <tr>
                <td>{{$producto->id}}</td>
                    <td>{{$producto->name}}</td>
                    
                
                    <td><a href="/showProduct/{{$producto->id}}">Ver</a></td>
                    <td><a href="/editProduct/{{$producto->id}}">Editar</a></td>    
                    <td><a href="/deleteProduct/{{$producto->id}}">Eliminar</a></td>
                </tr>
                @endforeach
        </tbody>

    </table>

@endsection