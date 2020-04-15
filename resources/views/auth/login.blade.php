@extends('layouts.app')
@section('title')
GameCentral - @lang('auth.connection')
@endsection
@section('content')
<h1 class="text-center blue font-weight-bolder">@lang('auth.connection')</h1>
<hr>
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="d-flex flex-column align-items-center">
        <label for="login" class="blue font-weight-bold">@lang('auth.login')</label>
        <input type="text" name="login" id="login"
            class=" form-control responsive-input shadow-sm rounded @error('login') is-invalid @enderror"
            value="{{ old('login') }}" required>
        @error('login')
        <div class="invalid-feedback responsive-input">@lang('auth.loginerror')</div>
        @enderror
        <label for="password" class="blue mt-4 font-weight-bold">@lang('auth.pwd')</label>
        <input type="password" name="password" id="password"
            class=" form-control responsive-input shadow-sm rounded @error('password') is-invalid @enderror"
            value="{{ old('password') }}" required>
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">@lang('auth.pwdforgot')</a>
        @endif

        <button type="submit" class="btn bg-orange text-light justify-content-center font-weight-bold mt-4 shadow-sm">
            @lang('auth.connection')
        </button>
    </div>
</form>
<div class="row justify-content-center">
    <a href="{{ route('register') }}">@lang('auth.register')</a>
</div>
<hr>
@endsection