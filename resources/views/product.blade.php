@extends('layouts.master')
@section('content')
<main>
    <h2 class="__productos">Listado de Productos</h2>

    <div class="__productos row">
      <div class="d-flex card col-12  __itempelicula" style="width: 18rem;">
        <ul>
            @foreach ($products as $product)
                <li>
                    <a href="/detailProduct/{{$product->id}}">{{$product->name}}</a> 
                            
                </li>
            @endforeach     
        </ul>
        <p>
            {{$products->links()}}
        </p>
        
        
      </div>
        
  </main>        
@endsection