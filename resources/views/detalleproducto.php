@extends('layouts.main')
@section('content')
<main>
    <h2 class="__producto">Detalle del Producto</h2>

    <div class="__productos row">
      <div class="d-flex card col-12  __itemproducto" style="width: 18rem;">
        
        <div>
            Nombre: {{$detalle->name}}
            <br>
            Precio: {{$detalle->price}}
            <br>
            Descripción: {{$detalle->description}}
            <br>
            Foto: {{$detalle->photopath}}
            <br>
        </div>
        <a href="/listadoProductos">Volver</a>    
                
        
      </div>
        
  </main>        
@endsection

