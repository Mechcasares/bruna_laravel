@extends('layouts.master')
@section('content')

<main class = "principalcarrito">
    <section class="seccion1carrito row">
      <div class="card articulo1carrito" style="width: 18rem; height: 24rem">
        <img src="img/producto1.jpg" class="card-img-top img-articulo1carrito" alt="producto1">
        <div class="card-body">
          <p class="card-text titulocarrito">ANDERSON</p>
          <p class="detallecarrito"> Sofá de dos cuerpos tela pana vintage pink</p>
          <p class="preciocarrito">$10.000</p>
          <a href="/detailproduct" class="btn btn-default __comprar">Ver detalle</a>
        </div>
      </div>
      <div class="card articulo1carrito" style="width: 18rem; height: 24rem">
          <img src="img/producto2.jpg" class="card-img-top img-articulo1carrito" alt="producto2">
          <div class="card-body">
            <p class="card-text titulo">TIA</p>
            <p class="detallecarrito">Sofá de dos cuerpos tela pana vintage green</p>
            <p class="preciocarrito">$8.500</p>
            <a href="/detailproduct" class="btn btn-default __comprar">Ver detalle</a>
          </div>
        </div>
        <div class="card articulo1carrito" style="width: 18rem; height: 24rem">
            <img src="img/producto3.jpg" class="card-img-top img-articulo1carrito" alt="producto3">
            <div class="card-body">
              <p class="card-text titulocarrito">TYRELL</p>
              <p class="detallecarrito">Sofá de dos cuerpos tela pana vintage yellow</p>
              <p class="preciocarrito">$25.900</p>
              <a href="/detailproduct" class="btn btn-default __comprar">Ver detalle</a>
            </div>
          </div>
          <div class="card articulo1carrito" style="width: 18rem; height: 24rem">
              <img src="img/producto4.jpg" class="card-img-top img-articulo1carrito" alt="producto4">
              <div class="card-body">
                <p class="card-text titulo">ANDERS</p>
                <p class="detallecarrito">Sofá de dos cuerpos tela lino rustico gris</p>
                <p class="preciocarrito">$15.800</p>
                <a href="/detailproduct" class="btn btn-default __comprar">Ver detalle</a>
              </div>
            </div>
            <div class="card articulo1carrito" style="width: 18rem; height: 24rem">
                <img src="img/producto5.jpg" class="card-img-top img-articulo1carrito" alt="producto5">
                <div class="card-body">
                  <p class="card-text titulocarrito">KARI</p>
                  <p class="detallecarrito">Sofá de tres cuerpos tela pana azul</p>
                  <p class="preciocarrito">$20.000</p>
                  <a href="/detailproduct" class="btn btn-default __comprar">Ver detalle</a>
                </div>
              </div>
              <div class="card articulo1carrito" style="width: 18rem; height: 24rem">
                  <img src="img/producto6.jpg" class="card-img-top img-articulo1carrito" alt="producto6">
                  <div class="card-body">
                    <p class="card-text titulocarrito">ROSCOE</p>
                    <p class="detallecarrito">Sofá de tres cuerpos tela pana verde</p>
                    <p class="preciocarrito">$15.000</p>
                    <a href="/detailproduct" class="btn btn-default __comprar">Ver detalle</a>
                  </div>
                </div>
    </section>
</main>
@endsection
