<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm  text-center">
            <div class="container">
                <a class="center-block " href="{{ url('/') }}">
                    LOGO
                </a>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="navbar navbar-expand-md navbar-light bg-white shadow-sm  text-center">
            <div id="copyright text-right">© Copyright 2013 Scotchy Scotch Scotch</div>
        </footer>
    </div>
</body>
</html>
