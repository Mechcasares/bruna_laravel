@extends('layouts.master')
@section('content')

<main class="cart">
<div class="row">
  @foreach ($products as $product)
     <div class="product">
       <h3 class="productTitle"> {{$product -> name}}</h3>
        @if($product->photopath !== null)
          <img src="/storage/{{ $product->photopath }}" alt="photo">
        @endif
       <h6 class="productDetail"> {{$product -> description}}</h6>
       <p>$ {{$product -> price}}</p>
       <div class="productImage">
<<<<<<< HEAD
     
=======
      @if($product->photopath !== null)
      <img src="/storage/{{ $product->photopath }}" alt="photo">
      @endif

      <br> <a href="{{url('cart/add/' . $product->id)}}">Agregar</a> 
      
    
>>>>>>> 0d871fefbf75a35f2ab762512b6e222ff9bf0a20
    </div>
     </div>
  @endforeach
</div>
</main>
@endsection
