@extends('layouts.app')

@section('content')
<admin-navbar dashboard="@lang('admin.dashboard')" dashboard-route="{{ url('/admin') }}" games="@lang('admin.games')"
    game-route="{{ url('admin/games') }}" customers="@lang('admin.customers')"
    customer-route="{{ url('admin/customers') }}" employees="@lang('admin.employees')"
    employee-route="{{ url('admin/employees') }}"></admin-navbar>
<h1 class="text-center my-3 blue font-weight-bold">@lang('admin.employees')</h1>
<table-employees :data="{{ $employees }}" login="@lang('admin.login')" email="@lang('admin.email')"
    see="@lang('admin.see')" delete-user="@lang('admin.delete')"></table-employees>
@endsection