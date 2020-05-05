@extends('layouts.app')
@section('title')
GameCentral
@endsection
@section('content')
<h1 class="text-center my-3 blue font-weight-bold">@lang('main.search')</h1>
<search-bar lang-game="@lang('main.searchGame')" lang-customer="@lang('main.searchCustomer')"></search-bar>
@endsection