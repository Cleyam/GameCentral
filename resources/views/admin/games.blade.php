@extends('layouts.app')
@section('title')
GameCentral - @lang('admin.games')
@endsection
@section('content')
<admin-navbar dashboard="@lang('admin.dashboard')" dashboard-route="{{ url('/admin') }}" games="@lang('admin.games')"
    game-route="{{ url('admin/games') }}" customers="@lang('admin.customers')"
    customer-route="{{ url('admin/customers') }}" employees="@lang('admin.employees')"
    employee-route="{{ url('admin/employees') }}"></admin-navbar>

<h1 class="text-center my-3 blue font-weight-bold">@lang('admin.games')</h1>

<a href="games/new" class="float-right"><button
        class="btn bg-orange text-light mx-auto font-weight-bold mb-4 shadow-sm">@lang('admin.add')</button></a>

<admin-table-games :data="{{ $games }}" name="@lang('admin.name')" developer="@lang('admin.developer')"
    genre="@lang('admin.genre')" release="@lang('admin.release')" stock="@lang('admin.stock')" see="@lang('admin.see')"
    delete-game="@lang('admin.delete')"></admin-table-games>

@endsection