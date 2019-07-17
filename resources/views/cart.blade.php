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
     
    </div>
     </div>
      
     
  @endforeach
</div>
</main>
@endsection
