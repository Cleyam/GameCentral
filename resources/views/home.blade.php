@extends('layouts.app')

@section('content')
<div id="search-bloc" class="container">
    <div class="d-flex justify-content-around pb-5">

        <search-button inputSearch="games">@lang('main.searchGame')</search-button>
        <search-button inputSearch="users">@lang('main.searchUser')</search-button>
    </div>
    <input type="text" class="form-control" v-bind:id="inputSearch.id">
</div>
@endsection