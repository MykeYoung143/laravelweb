@extends('layouts.main')

@section('container')

<div class="page-content page-auth">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center row-login">
          <div class="col-lg-6 text-center">
            <img
              src="/img/forgot.png"
              alt=""
              class="w-50 mb-4 mb-lg-none"
            />
          </div>
          <div class="col-lg-5">
            <h2 class="pb-2">Reset Password</h2>
    <form method="post" class="forgot" novalidate="" action="login.forgot">
        @csrf

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>

        @endif
        <div class="form-group">
            <input type="email" id="email" class="form-control w-75" name="email" value="{{ old('email')}}"
            placeholder="Enter your email">

            <span text="text-danger">
                @error('email')
                {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
             <button class="btn btn-block w-75" type="submit"
                >Submit</button
              >
        </div>
    </form>
		  </div>
		</div>
	</div>
	</div>
		



@endsection