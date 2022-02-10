@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Register') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 
<div class="page-content page-auth">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center row-login">
          <div class="col-lg-6 text-center">
            <img
              src="/img/register.png"
              alt=""
              class="w-50 mb-4 mb-lg-none"
            />
          </div>
          <div class="col-lg-5">
            <h2>Give the best for your pets<br />with Us</h2>
          <form action="/register" method="post">
            @csrf
            <div class="form-group">
			      <label for="name">Name</label>
              <input type="text" name="name" class="form-control w-75 @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
              
              @error ('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
				<label for="username">Username</label>
              <input type="text" name="username" class="form-control w-75 @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
              
              @error ('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
				<label for="floatingInput">Email address</label>
              <input type="email" name="email" class="form-control w-75 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
              
              @error ('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
				<label for="floatingPassword">Password</label>
              <input type="password" name ="password" class="form-control w-75 @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
              @error ('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <button class=" btn btn-block w-75 mt-4" type="submit">Register</button>
			   <a href="/login" class="btn btn-block w-75" id="btn-3"
                >Already Registered? Login</a>
          </form>

    </div>
</div>
		   </div>
    </div>
  </div> -->
@endsection
