<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'RézaSki') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('hot/js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('hot/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fa/css/font-awesome.min.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            @yield('navbar')
            @yield('sidebar')
            @yield('content')
        </div>
        @yield('script')
    </body>
</html>
