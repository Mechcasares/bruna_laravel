<body>
<section class="container">
		
    <section class="navbarright">

                <div class="linksContainer" style="padding-top: 4px;">
                    <div class="links">
                        <a href="/">HOME</a>
                        <a href="/cart" class="products">PRODUCTOS</a>
                        <a href="/nosotros">NOSOTROS</a>
                        <a href="/contacto">CONTACTO</a> 
                      <!--   @if(auth()->user() && auth()->user()->role == 9)     
                        <a class="nav-link" href="/adminProducts">ADMIN</a>
                        @endif -->
                    </div>
                </div>
       
    </section>
        
    <section class="logo">
        <a href="/"><img src="{{asset('img/bruna.png')}}"></a>
    </section>

    <section class="icon-bar">
        <article class="col-12 col-md-12 col-lg-12 text-right">
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
<div class="dropdown">
  <div class="openMenu" id="menu">
    <div id="menuOption"class="sillones"><p class="menuOptionP">SILLONES</p></div>
    <div id="menuOption"class="sillas"><p class="menuOptionP">SILLAS</p></div>
    <div id="menuOption"class="mesas"><p class="menuOptionP">MESAS</p></div>
    <div id="menuOption"class="acces"><p class="menuOptionP">ACCESORIOS</p></div>
  </div>
</div>