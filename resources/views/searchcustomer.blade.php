@extends('layouts.app')
@section('title')
GameCentral
@endsection
@section('content')
<search-bar lang-game="@lang('main.searchGame')" lang-customer="@lang('main.searchCustomer')"></search-bar>
@endsection