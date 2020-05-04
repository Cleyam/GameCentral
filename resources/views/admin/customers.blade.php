@extends('layouts.app')
@section('title')
GameCentral - @lang('admin.customers')
@endsection
@section('content')
<admin-navbar dashboard="@lang('admin.dashboard')" dashboard-route="{{ url('/admin') }}" games="@lang('admin.games')"
    game-route="{{ url('admin/games') }}" customers="@lang('admin.customers')"
    customer-route="{{ url('admin/customers') }}" employees="@lang('admin.employees')"
    employee-route="{{ url('admin/employees') }}"></admin-navbar>
<h1 class="text-center my-3 blue font-weight-bold">@lang('admin.customers')</h1>
<a href="customers/new" class="float-right"><button
        class="btn bg-orange text-light mx-auto font-weight-bold mb-4 shadow-sm">@lang('admin.add')</button></a>
<admin-table-customers :data="{{ $customers }}" name="@lang('admin.name')" email="@lang('admin.email')"
    phone="@lang('admin.phone')" created="@lang('admin.created')" see="@lang('admin.see')"
    delete-user="@lang('admin.delete')"></admin-table-customers>
@endsection