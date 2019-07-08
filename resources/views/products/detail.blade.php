@extends('layouts.master')

@section('content')
<main>
    <h2 class="__producto">Detalle del Producto</h2>

    <div class="__productos row">
      <div class="d-flex card col-12  __itemproducto">
        
        <div>
            Nombre: {{$detail->name}}
            <br>
            Precio: {{$detail->price}}
            <br>
            Descripción: {{$detail->description}}
          
        </div>
        <a href="/listProducts">Volver</a>    
     
      </div>
    </div>
</main>   
@endsection

