<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- Icons --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        @guest
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <a href="{{ url('/') }}">
                        <img class="px-3 img-fluid" src="https://i.imgur.com/UTFJMhw.png" alt="GameCentral logo"
                            title="GameCentral logo">
                    </a>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
        @else
        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <a href="{{ url('/') }}">
                        <img class="px-3 img-fluid" src="https://i.imgur.com/UTFJMhw.png" alt="GameCentral logo"
                            title="GameCentral logo">
                    </a>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @yield('content')
                    </div>
                </div>
            </div>

            {{-- Logout button --}}
            <logout-button route="{{ route('logout') }}"></logout-button>

        </main>
        @endguest
    </div>
</body>

</html>