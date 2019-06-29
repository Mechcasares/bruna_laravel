@extends('layouts.master')
@section('content')
<main>
    <h2 class="__productos">Listado de Productos</h2>

    <div class="__productos row">
      <div class="d-flex card col-12  __itempelicula" style="width: 18rem;">
        <ul>
            @foreach ($productos as $producto)
                <li>
                    <a href="/detalleProducto/{{$producto->id}}">{{$producto->name}}</a> 
                            
                </li>
            @endforeach     
        </ul>
        <p>
            {{$productos->links()}}
        </p>
        
        
      </div>
        
  </main>        
@endsection