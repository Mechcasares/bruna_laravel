@extends('layouts.master')
@section('content')
<main class="detailProduct">
  <div class="detailContainer">
  <div class="detailTitle">
    <h1>Detalle de Producto</h1>
  </div>  

  <div class="info">
    <div class="productImage">
      @if($detail->photopath !== null)
      <img src="storage/{{ $detail->photopath }}" alt="pp">
      @endif
    </div>
    <div class="productInfo">
      <h6>Nombre: {{$detail->name}} </h6>       
      <h6>Precio: {{$detail->price}}</h6>
      <h6>Descripción: {{$detail->description}}  </h6>  
    </div>
  </div>
  <div class="detailTitle">
      <a href="/adminProducts" class="backButton">VOLVER</a> 
  </div>
  </div>
</main>   
@endsection

