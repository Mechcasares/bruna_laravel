@extends('layouts.master')
@section('content')

<div class="categoryFilter">
  @foreach ($products as $product)
  @if($product->category_id == 2) 
  
     <div class="product">
       <h3 class="productTitle"> {{$product -> name}}</h3>
        @if($product->photopath !== null)
          <img src="/storage/{{ $product->photopath }}" alt="photo">
        @endif
       <h6 class="productDetail"> {{$product -> description}}</h6>
       <p>$ {{$product -> price}}</p>
       <div class="productImage">
       <a href="{{url('cart/add/' . $product->id)}}">Agregar</a> 
       </div>
     </div>
  @endif
    
     
  @endforeach

  </div>
@endsection