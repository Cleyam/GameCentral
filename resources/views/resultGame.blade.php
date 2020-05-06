@extends('layouts.app')
@section('title')
GameCentral
@endsection
@section('content')
<h1 class="text-center my-3 blue font-weight-bold">{{ $game->reference }}</h1>
<detail-game :game="{{ $game }}" genre="@lang('admin.genre')" :genres="{{ $genres }}" mode="@lang('admin.mode')"
    :modes="{{ $modes }}" platform="@lang('admin.platform')" :platforms="{{ $platforms }}"
    developer="@lang('admin.developer')" :developers="{{ $developers }}" name="@lang('admin.name')"
    release="@lang('admin.release')" stock="@lang('admin.stock')" synopsis="@lang('admin.synopsis')"
    image="@lang('admin.image')" miniature="{{ asset('/images/'.$game->miniature) }}" update="@lang('admin.update')"
    choose="@lang('admin.choose')" image-change="@lang('admin.imageChange')" actual-image="@lang('admin.actualImage')">
</detail-game>
@endsection