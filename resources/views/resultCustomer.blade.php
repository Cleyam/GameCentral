@extends('layouts.app')
@section('title')
GameCentral
@endsection
@section('content')
<h1 class="text-center my-3 blue font-weight-bold">{{ $customer->surname }} {{ $customer->name }}</h1>
<detail-customer :customer="{{ $customer }}" email="@lang('admin.email')" name="@lang('admin.name')"
    surname="@lang('admin.surname')" phone="@lang('admin.phone')"></detail-customer>
<detail-customer-locations :games=""></detail-customer-locations>
@endsection