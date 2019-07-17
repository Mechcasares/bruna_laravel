@extends('layouts.master')
@section('content')
<div class="mainBag">
  @foreach (Session::get('cart.products') as $producto)
  <div class="productBag">
    <div class="bagImg">
      <img src="/storage/{{ $producto['photopath'] }}" alt="">
    </div>
    <div class="bagInfo">
      <h2>{{ $producto['titulo'] }}</h1>
      <h6 id="price">$ {{ $producto['precio'] }}</h6>
    </div>
  </div>
  @endforeach
  <div class="finalizarLaCompra">
    <h2 class="total">TOTAL: ${{$producto['precio']}}</h2>
  </div>
</div>
@endsection