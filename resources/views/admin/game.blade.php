@extends('layouts.app')

@section('content')
<admin-navbar dashboard="@lang('admin.dashboard')" dashboard-route="{{ url('/admin') }}" games="@lang('admin.games')"
    game-route="{{ url('admin/games') }}" customers="@lang('admin.customers')"
    customer-route="{{ url('admin/customers') }}" employees="@lang('admin.employees')"
    employee-route="{{ url('admin/employees') }}"></admin-navbar>

<h1 class="text-center my-3 blue font-weight-bold">{{ $game->reference }}</h1>

<admin-update-game :game="{{ $game }}" :genres="{{ $genres }}" :modes="{{ $modes }}" :platforms="{{ $platforms }}"
    :developers="{{ $developers }}" name="@lang('admin.name')" developer="@lang('admin.developer')"
    genre="@lang('admin.genre')" platform="@lang('admin.platform')" mode="@lang('admin.mode')"
    release="@lang('admin.release')" stock="@lang('admin.stock')" synopsis="@lang('admin.synopsis')"
    image="@lang('admin.image')" update="@lang('admin.update')">
</admin-update-game>
@endsection