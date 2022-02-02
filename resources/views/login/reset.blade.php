@extends('layouts.main')

@section('container')

<section class="h-100">
    <h4 class ="card-title">Reset Password</h4>
    <form method="post" class="forgot" novalidate="" action="login.update">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" name="email" placeholder="Email Address"
            value="{{ $email ?? old('email')}}">
            <span text="text-danger">
                @error('email')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="password">New Password</label>
            <input type="password" id="password" class="form-control" name="password"
            placeholder="New Password">
            <span text="text-danger">
                @error('password')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="form-group">
            <label for="password-confirm">Confirm Password</label>
            <input type="password" id="password-confirm" class="form-control" name="password_confirmation"
            placeholder="Confirm New Password">
            <span text="text-danger">
                @error('password_confirmation')
                {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group m-0">
            <button type="submit" class="btn btn-primary btn-block">
                Reset Password
            </button>
        </div>
    </form>

</section>

@endsection