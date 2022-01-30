@extends('layouts.main')

@section('container')
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
  </div>

@endsection