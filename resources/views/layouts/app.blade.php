<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title'){{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
    <div id="app">
        @include('layouts.navbar')

        <main style="margin-top: 100px">
            @yield('content')
        </main>
        {{-- if this route not login or register --}}
        @if (!(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register'))
            @include('layouts.direct_to_us')
            @include('layouts.footer')
        @endif
    </div>
</body>

</html>
