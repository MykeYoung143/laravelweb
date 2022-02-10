@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Login') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                            <div class="row mb-0">
                                <button type="submit" class="btn btn-block w-75">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-block w-75" href="{{ route('password.request') }}" id="btn-2">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                @if (Route::has('register'))
                                    <a class="btn btn-block w-75" href="{{ route('register') }}" id="btn-3">
                                        {{ __('New user? Sign up Here') }}</a>
                            @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="page-content page-auth">
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
              <a href="/password/reset" class="btn btn-block w-75" id="btn-2"
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
  </div> -->
@endsection
