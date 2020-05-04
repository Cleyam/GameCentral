@extends('layouts.app')
@section('title')
GameCentral
@endsection
@section('content')
<admin-navbar dashboard="@lang('admin.dashboard')" dashboard-route="{{ url('/admin') }}" games="@lang('admin.games')"
    game-route="{{ url('admin/games') }}" customers="@lang('admin.customers')"
    customer-route="{{ url('admin/customers') }}" employees="@lang('admin.employees')"
    employee-route="{{ url('admin/employees') }}"></admin-navbar>

<h1 class="text-center my-3 blue font-weight-bold">@lang('admin.add')</h1>
<admin-add-employee login="@lang('admin.login')" email="@lang('admin.email')" name="@lang('admin.name')"
    surname="@lang('admin.surname')" phone="@lang('admin.phone')" password="@lang('admin.password')"
    add="@lang('admin.add')"></admin-add-employee>
@endsection