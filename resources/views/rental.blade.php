@extends('layouts.app')
@section('title')
GameCentral - Louer
@endsection
@section('content')
<h1 class="text-center my-3 blue font-weight-bold">Location {{ $game->reference }}</h1>
<rental-form :game="{{ $game }}"></rental-form>
@endsection