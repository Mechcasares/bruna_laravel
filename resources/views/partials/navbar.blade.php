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
                      <!--   @if(auth()->user() && auth()->user()->role == 9)     
                        <a class="nav-link" href="/adminProducts">ADMIN</a>
                        @endif -->
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
            @if(auth()->user() && auth()->user()->role == 9)     
            <a href="/adminProducts"><i class="fa fa-wrench"></i></a>
            @endif
            <a href="#"><i class="fa fa-shopping-cart"></i></a>            
            @guest
            <a href="/login"><i class="fa fa-user"></i></a>
            @else
            <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
            @endguest
        </article>
       
    </section>


</section>
<div class="openMenu">
  <!-- <ul>
    <li> <a class="menuOptions" href="#">Sillones</a></li>
    <li> <a class="menuOptions" href="#">Sillas</a></li>
    <li> <a class="menuOptions" href="#">Mesas</a></li>
    <li> <a class="menuOptions" href="#">Accesorios</a></li>
  </ul> -->
  <div class="sillones">SILLONES</div>
  <div class="sillas">SILLAS</div>
  <div class="mesas">MESAS</div>
  <div class="acces">ACCESORIOS</div>
  
</div>