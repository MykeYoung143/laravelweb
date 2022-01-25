<nav class="navbar navbar-expand-lg" data-aos="fade-down">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="/img/Starter/Logo-Navi.svg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/posts">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "shop") ? 'active' : '' }}" href="/shop">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>
          <!-- @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </div> -->
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
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                      @csrf
                    <button type="submit" class="dropdown-item">
                     <i class="bi bi-box-arrow-in-right"></i> Logout
                    </button>
                  </form>
                </li>
              </ul>
            </li>
			</ul>
          @else
            <div class="Profile">
				<a href="#"><h4>Hooman</h4></a>
				<a href="/login" class="{{ ($active === "login") ? 'active' : '' }}" style="border: none"><img src="/img/Blog/Icon-navigasi.svg" alt=""></a>
        </div>
          @endauth
      </div>
    </div>
  </div>
</nav>