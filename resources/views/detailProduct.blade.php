@extends('layouts.master')
@section('content')
<main>
    <h2 >Detalle del Producto</h2>
    <div >
      <div >
        
        <div>
            Nombre: {{$detail->name}}
            <br>
            Precio: {{$detail->price}}
            <br>
            Descripción: {{$detail->description}}
            <br>
            @if($detail->photopath !== null)
            <img src="/storage/{{ $detail->photopath }}" alt="pp">
            @endif
            <br>
        </div>
        <a href="/listProducts">Volver</a>    
     
      </div>
    </div>
</main>   
@endsection

