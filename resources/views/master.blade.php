<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Brewtime</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
        @if(app()->environment() == 'production')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        @else
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
        @endif
        <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
        @yield('page-styles')
    </head>
    <body id="global-page">
        @include('header')

        <div class="container-fluid page">
            @yield('content')
        </div>
        <div class="container-fluid footer">
            &copy; 2015 Nick Felicelli
        </div>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/react.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.js"></script>
        <script>
        $(function() {
            FastClick.attach(document.body);
        });
        </script>
        @yield('page-scripts')
    </body>
</html>
