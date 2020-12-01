<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Talk222') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header class="navbar" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        <h1>{{ config('app.name', 'Talk222') }}</h1>
                    </a>
                </li>
                @if (Route::has('sobre'))
                <li>
                    <a href="{{ url('/sobre') }}" class="item">SOBRE</a>
                </li>
                @endif
                @if (Route::has('sobre'))
                <li>
                    <a href="{{ url('/indique') }}" class="item">INDIQUE</a>
                </li>
                @endif
                @if (Route::has('sobre'))
                <li>
                    <a href="{{ url('/fale_conosco') }}" class="item">FALE CONOSCO</a>
                </li>
                @endif
            </ul>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>