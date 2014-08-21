<?php use Bono\Helper\URL; ?>
<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title', 'Viper')</title>

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <link type="image/x-icon" href="{{ Theme::base('img/favicon.ico') }}" rel="Shortcut icon" />

    <link rel="stylesheet" href="{{ Theme::base('vendor/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('vendor/css/bootflat.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('vendor/css/lato.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('vendor/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('vendor/css/circular.navigation.css') }}">
    <link rel="stylesheet" href="{{ Theme::base('css/style.css') }}">

    <script src="{{ Theme::base('vendor/js/modernizr.min.js') }}"></script>
    <script src="{{ Theme::base('vendor/js/jquery.min.js') }}"></script>

    <!-- PAGE LEVEL STYLING -->
    @yield('styler')
</head>

<body>
    <!-- PAGE CONTENT -->
    <div class="error">
        <h1 class="text-center">Dafuq</h1>
    </div>

    <!-- REQUIRED SCRIPT -->
    <script src="{{ Theme::base('vendor/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" charset="utf-8">
    (function(){
        var URL_SITE = window.URL_SITE = '{{ URL::site() }}',
            URL_BASE = window.URL_BASE = '{{ URL::base() }}';}
    )();
    </script>

    <!-- PAGE LEVEL SCRIPT -->
    @yield('injector')
</body>
</html>
