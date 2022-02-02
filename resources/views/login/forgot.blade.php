@extends('layouts.main')

@section('container')

<section class="h-100">
    <h4 class ="card-title">Forgot Password</h4>
    <form method="post" class="forgot" novalidate="" action="login.forgot">
        @csrf

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>

        @endif
        <div class="form-group">
            <label for="email">E-Mail Address</label>
            <input type="email" id="email" class="form-control" name="email" value="{{ old('email')}}"
            placeholder="Enter your email">

            <span text="text-danger">
                @error('email')
                {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group m-0">
            <button type="submit" class="btn btn-primary btn-block">
                Send Reset Password Link
            </button>
        </div>
    </form>

</section>

@endsection