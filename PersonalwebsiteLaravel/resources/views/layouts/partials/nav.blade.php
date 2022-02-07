<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" ></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Details</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Journey</a></li>  
                @if (Route::has('login'))
						    <p class="mb-0 register-link">
                                @auth
                               <a href="{{ url('home') }}">Home</a>
                                @else
                               <a href="{{ route('login') }}">Login</a>

                              @if (Route::has('register'))
                              <a href="{{ route('register') }}">Register</a>
                            @endif
                           @endauth
                            </p>
                            @endif
            </ul>
        </div>
    </div>
</nav>