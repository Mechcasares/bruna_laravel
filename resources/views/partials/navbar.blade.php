<body>
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
            <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt">logout</i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
            @endguest
        </article>
    </section>

</section>