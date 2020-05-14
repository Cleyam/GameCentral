@extends('layouts.app')
@section('title')
GameCentral
@endsection
@section('content')
<h1 class="text-center my-3 blue font-weight-bold">{{ $customer->surname }} {{ $customer->name }}</h1>
<detail-customer :customer="{{ $customer }}" email="@lang('admin.email')" name="@lang('admin.name')"
    surname="@lang('admin.surname')" phone="@lang('admin.phone')"></detail-customer>

<h3 class="text-center my-3 blue font-weight-bold">@lang('main.rentals')</h3>
<detail-customer-locations :customer="{{ $customer }}" :games="{{ $customer->games }}" name="@lang('admin.name')"
    date-start="@lang('main.dateStart')" date-end="@lang('main.dateEnd')" return-game="@lang('main.returnGame')"
    toreturn="@lang('main.toreturn')" returned="@lang('main.returned')">
</detail-customer-locations>
@endsection