@extends('layouts.app')

@section('content')
<admin-navbar dashboard="@lang('admin.dashboard')" dashboard-route="{{ url('/admin') }}" games="@lang('admin.games')"
    game-route="{{ url('admin/games') }}" customers="@lang('admin.customers')"
    customer-route="{{ url('admin/customers') }}" employees="@lang('admin.employees')"
    employee-route="{{ url('admin/employees') }}"></admin-navbar>

<h1 class="text-center my-3 blue font-weight-bold">{{ $customer->surname }} {{ $customer->name }}</h1>

<admin-update-customer :customer="{{ $customer }}" login="@lang('admin.login')" email="@lang('admin.email')"
    name="@lang('admin.name')" surname="@lang('admin.surname')" phone="@lang('admin.phone')"
    password="@lang('admin.password')" update="@lang('admin.update')"></admin-update-customer>
@endsection