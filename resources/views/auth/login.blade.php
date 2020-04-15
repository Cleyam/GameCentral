@extends('layouts.app')

@section('content')
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="d-flex flex-column align-items-center">
        <label for="login" class="blue font-weight-bold">{{ __('auth.login') }}</label>
        <input type="text" name="login" id="login"
            class=" form-control responsive-input shadow-sm rounded @error('login') is-invalid @enderror"
            value="{{ old('login') }}" required>
        @error('login')
        <div class="invalid-feedback responsive-input">{{ __('auth.loginerror') }}</div>
        @enderror
        <label for="password" class="blue mt-4 font-weight-bold">{{ __('auth.pwd') }}</label>
        <input type="password" name="password" id="password"
            class=" form-control responsive-input shadow-sm rounded @error('password') is-invalid @enderror"
            value="{{ old('password') }}" required>
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">
            {{ __('auth.pwdforgot') }}
        </a>
        @endif

        <button type="submit" class="btn bg-orange text-light justify-content-center font-weight-bold mt-4 shadow-sm">
            {{ __('auth.connection') }}
        </button>
    </div>
</form>
<div class="row justify-content-center">
    <a href="{{ route('register') }}">{{ __('auth.register') }}</a>
</div>
@endsection