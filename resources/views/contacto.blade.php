@extends('layouts.master')
@section('content')


<div class="contactoMain">
    <div class="contactoContainer">
      <div class="contactoMapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.186451696774!2d-58.44586488477174!3d-34.54883428047373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436efe09303%3A0xfb39818e7624ac76!2sDigital+House!5e0!3m2!1ses!2sar!4v1563144315182!5m2!1ses!2sar" class="mapa"frameborder="0"  allowfullscreen></iframe>
      </div>
      <div class="contactoForm">
        <h2 class="contactoH2">Contacto</h2>
        <form action=""> 
        <div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Nombre" required>
              </div>
        </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Apellido" required>
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control mt-2" placeholder="Email" required>
              </div>
            </div>
           
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Telefono" required>
              </div>
            </div>
           
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Comentario" rows="3" required></textarea>
              </div>
            </div>
       
            <div class="col-12">
              <button class="btnContacto" type="submit">Enviar</button>
            </div>
          </div>
        </form>
        <div class="infoDeContacto">
          <i class="fa fa-phone mt-3"></i> <a href="tel:+"> 4786-8907</a><br>
          <i class="fa fa-envelope mt-3"></i> <a href="">info@bruna.com</a><br>
          <i class="fa fa-globe mt-3"></i> <a> Monroe</a><br>
        </div>
        </div>
      </div>

    </div>
</div>
</div>



@endsection