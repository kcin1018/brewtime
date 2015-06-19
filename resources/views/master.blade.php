<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Brewtime</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Brewtime">
        <meta name="author" content="Nick Felicelli">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="cleartype" content="on">

        <meta property="og:image" content="https://brewtime.herokuapp.com/img/logo.jpg" />
        <meta property="og:title" content="Brewtime" />
        <meta property="og:description" content="Brewtime" />

        <meta name="apple-mobile-web-app-title" content="Brewtime">

        <meta name="msapplication-TileImage" content="{{ asset('/apple-touch-icon.png') }}">
        <meta name="msapplication-TileColor" content="#ffffff">

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>
        <link href="{{ elixir('css/vendor.css') }}" rel="stylesheet">
        <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
        @yield('page-styles')
    </head>
    <body>
        @include('header')

        <div class="container-fluid page">
            @yield('content')
        </div>
        <div class="container-fluid footer">
            &copy; 2015 Nick Felicelli
        </div>
        <script src="{{ elixir('js/vendor.js') }}"></script>
        @yield('page-scripts')
    </body>
</html>
