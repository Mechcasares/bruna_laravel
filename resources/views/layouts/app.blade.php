<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BRUNA</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   

    <!-- Styles -->
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
</head>
<body>
<!-- aca arranca la de bruna -->
<section class="container">
		
    <section class="navbarright">
        <article class="col-12 col-md-12 col-lg-12">
            <nav>
                <ul>
                    <li class="links">
                        <a href="/">HOME</a>
                        <a href="/cart">PRODUCTOS</a>
                        <a href="#">NOSOTROS</a>
                        <a href="#">CONTACTO</a> 
                    </li>
                </ul>
            </nav>
        </article>
    </section>
        
    <section class="logo">
        <a href="/"><img src="img/bruna.png"></a>
    </section>

    <section class="icon-bar">
        <article class="col-12 col-md-12 col-lg-12">
            <a href="#"><i class="fa fa-heart"></i></a>
            <a href="#"><i class="fa fa-search"></i></a> 
            <a href="#"><i class="fa fa-shopping-cart"></i></a>
            @guest
            <a href="/login"><i class="fa fa-user"></i></a>
            @else 
            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

            
             <!-- Right Side Of Navbar -->
            
           
        </article>
    </section>

</section>

 
</body>
</html>
