@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nosotros</title>
</head>
<body>

<div class="container-fluid">
<div class="row">
    
    <div class="imgNostros">  
        <img src="img/nosotros.png" class="img-fluid" alt="Responsive image">
    </div>
    
</div>
    <section class="texto">
    <div class="tituloNosotros">Sobre Nosotros</div>
    
    <div class="cuerpoNosotros">
        <h2>Creemos que el gran diseño es para todos. Sorprende, <br> cuenta una historia y hace que lo cotidiano sea un poco menos <br> común. En BRÛNA diseñamos cómo vive la gente hoy.
        </h2>
    </div>
    <div class="cuerpoNosotros">
        <h3>
        La marca surgió bajo una necesidad: muebles de buena calidad <br> y económicos. El concepto era obvio: simplifique las cosas, trabaje <br> directamente con los creadores y ofrezca un diseño de <br> alta calidad, para todos, a un precio justo.
        </h3>
    </div>



    </section>

    <section class="newsletter row">
    <div class="col-sm-12">
	    <div class="content">
		    <h2>Subscibite a nuestro Newsletter</h2>
	    <div class="input-group">
            <input type="email" class="form-control" placeholder="Ingresá tu mail">
            <span class="input-group-btn">
            <button class="btn" type="submit">Subscribite</button>
         </span>
        </div>
	</div>
</div>
</div>
</div>
</section>


</div>



</body>
</html>

@endsection