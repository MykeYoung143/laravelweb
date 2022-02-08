@extends('layouts.main')

@section('container')

<!-- <div class="row justify-content-center">
    <div class="col-lg-4">

      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
      @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Login Form</h1>
          <form action="/login" method="post">
            @csrf
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
            <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</small>
        </main>

    </div>
</div> -->

<div class="page-content page-auth">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center row-login">
          <div class="col-lg-6 text-center">
            <img
              src="/img/login.png"
              alt=""
              class="w-50 mb-4 mb-lg-none"
            />
          </div>
          <div class="col-lg-5">
            <h2>Care Your Pet <br />With Us</h2>
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              </button>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              </button>
            </div>
            @endif
            <form action="/login" method="post" class="mt-3">
              @csrf
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" class="form-control w-75 @error('email') is-invalid @enderror"  id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control w-75" id="password" placeholder="Password" required>
              </div>
              <button class="btn btn-block w-75" type="submit"
                >Sign In</button
              >
              <a href="/forgot_password" class="btn btn-block w-75" id="btn-2"
                >Forget Password</a
              >
				<hr>
				 <a href="/register" class="btn btn-block w-75" id="btn-3"
                >New user? Sign up Here</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection