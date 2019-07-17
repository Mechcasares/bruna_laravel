@extends('layouts.master')
@section('content')

<main class="cart">
<div class="row">
  @foreach ($products as $product)
     <div class="product">
       <h3 class="productTitle"> {{$product -> name}}</h3>
       <h6> {{$product -> description}}</h6>
       <p>$ {{$product -> price}}</p>
       <div class="productImage">
      @if($product->photopath !== null)
      <img src="/storage/{{ $product->photopath }}" alt="photo">
      @endif

      <br> <a href="{{url('cart/add/' . $product->id)}}">Agregar</a> 
      
    
    </div>
     </div>
  @endforeach
</div>
</main>
@endsection
