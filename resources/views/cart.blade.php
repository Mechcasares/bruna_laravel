@extends('layouts.master')
@section('content')

<main class="cart">
<div class="row">
  @foreach ($products as $product)
     <div class="product">
       <h3 class="productTitle"> {{$product -> name}}</h3>
       <h6> {{$product -> description}}</h6>
       <p>$ {{$product -> price}}</p>
     </div>
      
     
  @endforeach
</div>
</main>
@endsection
