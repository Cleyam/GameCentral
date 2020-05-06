@extends('layouts.app')
@section('title')
GameCentral
@endsection
@section('content')
<h1 class="text-center my-3 blue font-weight-bold">@lang('main.search')</h1>
<search-bar lang-game="@lang('main.searchGame')" lang-customer="@lang('main.searchCustomer')"></search-bar>
@if(isset($result) && isset($type))
@if($type == 'game' && !empty($result))
<search-bar-result-games :data="{{ $result }}" name="@lang('admin.name')" developer="@lang('admin.developer')"
    genre="@lang('admin.genre')" release="@lang('admin.release')" stock="@lang('admin.stock')" see="@lang('admin.see')"
    delete-game="@lang('admin.delete')"></search-bar-result-games>
@elseif($type == 'customer' && !empty($result))
<search-bar-result-customers :data="{{ $result }}" name="@lang('admin.name')" email="@lang('admin.email')"
    phone="@lang('admin.phone')" created="@lang('admin.created')" see="@lang('admin.see')">
</search-bar-result-customers>
@endif
@endif
@endsection