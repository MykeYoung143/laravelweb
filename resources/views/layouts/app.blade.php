<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Miarao </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	  
	<!-- My CSS -->
    <link rel="stylesheet" href="/css/main.css">
	
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	  
	<!-- Favicon -->
	<link rel="shortcut icon" href="/img/Starter/favicon.ico" type="image/x-icon">
	  
	<!-- AOS CSS -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	  
	<!-- JQuery LightSlider CSS -->
    <link rel="stylesheet" href="/css/lightslider.css">
    
    <!-- Social media share script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    
	<!-- JQuery LightSlider Script -->
    <script src="/Js/Jquery.js"></script>
    <script src="/Js/lightslider.js"></script>
	<script type="text/javascript" src="/Js/script.js"></script>
</head>
<body>
    <!-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/img/Starter/Logo-Navi.svg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav ms-auto">
                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
<header class="sticky-top">
<nav class="navbar navbar-expand-lg" >
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="/img/Starter/Logo-Navi.svg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/shop">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
      </ul>
		<div class="swap">
      	<form action="/posts" class="d-flex">
        @if (request('category'))
          <input class="form-control me-2" type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
          <input class="form-control me-2" type="hidden" name="author" value="{{ request('author') }}">
        @endif
              <input type="text" aria-label="Search" class="form-control me-2" placeholder="Search.." name="search" value="{{ request('search') }}">
              <button class="btn" type="submit"><i class="fas fa-search"></i></button>
      </form>
        
          @auth
		<ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
				<div class="Profile">
              <a class="dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }} <img src="/img/Starter/Icon-Nav.svg" alt="">
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @can('admin')
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                @endcan
                <li>
                  <form action="/logout" method="post">
                      @csrf
                    <button type="submit" class="dropdown-item">
                     <i class="bi bi-box-arrow-in-right"></i> Logout
                    </button>
                  </form>
                </li>
              </ul>
					</div>
            </li>
			</ul>
          @else
            <div class="Profile">
				<a href="/login" style="border: none"><h4>Sign In</h4></a>
				<a href="/login" style="border: none"><i class="fas fa-user"></i></a>
        </div>
          @endauth
      </div>
    </div>
  </div>
</nav>
</header>
        <main class="py-4">
            @yield('content')
        </main>
        <!-- Footer -->
	  <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                  <div class="foot-item">
                  <img src="/img/Starter/Logo-Navi.svg" alt="" >
                    <p>
                        &copy; 2022 Miarao. All rights Reserved
                    </p>
                  </div>
                </div>
            </div>
        </div>
        </footer>
    </div>
    
</body>
</html>
