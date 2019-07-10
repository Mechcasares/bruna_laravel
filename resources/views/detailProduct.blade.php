@extends('layouts.master')
@section('content')
<main class="detailProduct">
  <div>
    <h2 >Detalle del Producto</h2>
  </div>  
  <div>
      <div>
        <div>
            Nombre: {{$detail->name}}
            <br>
            Precio: {{$detail->price}}
            <br>
            Descripción: {{$detail->description}}
            <br>
            @if($detail->photopath !== null)
            <img src="storage/{{ $detail->photopath }}" alt="pp">
            @endif
            <br>
        </div>
        <a href="/adminProducts">Volver</a>    
     
      </div>
    </div>
</main>   
@endsection

