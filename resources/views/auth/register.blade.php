@extends('layouts.app')

@section('content')

<form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="d-flex flex-column align-items-center">
        <label for="login" class="font-weight-bold blue">{{ __('auth.login') }}</label>
        <input type="text" name="login" id="login"
            class="form-control responsive-input shadow-sm rounded @error('login') is-invalid @enderror"
            value="{{ old('login') }}" required>
        @error('login')
        <div class="invalid-feedback responsive-input">{{ $message }}</div>
        @enderror
        <label for="email" class="mt-4 font-weight-bold blue">{{ __('auth.email') }}</label>
        <input type="email" name="email" id="email"
            class="form-control responsive-input shadow-sm rounded @error('email') is-invalid @enderror"
            value="{{ old('email') }}" required>
        @error('email')
        <div class="invalid-feedback responsive-input">{{ $message }}</div>
        @enderror
        <label for="password" class="mt-4 font-weight-bold blue">{{ __('auth.pwd') }}</label>
        <input type="password" name="password" id="password"
            class="form-control responsive-input shadow-sm rounded @error('password') is-invalid @enderror" required>
        @error('password')
        <div class="invalid-feedback responsive-input">{{ $message }}</div>
        @enderror
        <label for="password-confirm" class="mt-4 font-weight-bold blue">{{ __('auth.pwdconfirm') }}</label>
        <input type="password" name="password_confirmation" id="password-confirm"
            class="form-control responsive-input shadow-sm rounded @error('password-confirm') is-invalid @enderror"
            required>
        @error('password-confirm')
        <div class="invalid-feedback responsive-input">{{ $message }}</div>
        @enderror
        <button type="submit"
            class="btn bg-orange text-light justify-content-center font-weight-bold mt-4 shadow-sm">{{ __('auth.register') }}</button>
    </div>


</form>

@endsection