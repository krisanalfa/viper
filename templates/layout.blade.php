<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>@yield('title', 'Viper')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <!-- Notification area -->
    @section('notification')
        {{-- f('notification.show') --}}
    @show

    @section('navigator')
        <header id="header" class="header">
            <button class="cn-button" id="cn-button">+</button>
            <div class="cn-wrapper" id="cn-wrapper">
               <ul>
                    <li><a href="https://github.com/krisanalfa/viper" title="View on GitHub" target="_blank"><span class="fa fa-github"></span></a></li>
                    <li><a href="{{ URL::site('about') }}" title="About"><span class="fa fa-info"></span></a></li>
                    <li><a href="{{ URL::site() }}" title="Go Home"><span class="fa fa-home"></span></a></li>
                    <li><a href="{{ URL::site('toxic/null/create') }}" title="Create new Toxic"><span class="fa fa-pencil"></span></a></li>

                    @if(f('auth.allowed', '/user'))
                        <li><a href="{{ URL::site('logout') }}" title="Logout"><span class="fa fa-sign-out"></span></a></li>
                    @else
                        <li><a href="{{ URL::site('login?!continue=').Theme::base() }}" title="Login"><span class="fa fa-sign-in"></span></a></li>
                    @endif
               </ul>
            </div>
        </header>
        <div id="cn-overlay" class="cn-overlay"></div>
    @show

    <!-- PAGE CONTENT -->
    @yield('content')

    <!-- REQUIRED SCRIPT -->
    <script src="{{ Theme::base('vendor/js/polyfills.js') }}"></script>
    <script src="{{ Theme::base('vendor/js/bootstrap.min.js') }}"></script>
    <script src="{{ Theme::base('vendor/js/headroom.min.js') }}"></script>

    <script type="text/javascript" charset="utf-8">
    (function(){
        var URL_SITE = window.URL_SITE = '{{ URL::site() }}',
            URL_BASE = window.URL_BASE = '{{ URL::base() }}';}
    )();
    </script>
    <script src="{{ Theme::base('vendor/js/circular.navigation.js') }}"></script>
    <script>
        // grab an element
        var myElement = document.querySelector("header");
        // construct an instance of Headroom, passing the element
        var headroom  = new Headroom(myElement, {
            tolerance : {
                up : 5,
                down : 5
            },
        });
        // initialise
        headroom.init();
        $('table').addClass('table table-striped table-bordered table-hover table-condensed');

        if (! $('table').closest('div').hasClass('table-responsive')) {
            $('table').wrap('<div class="table-responsive"></div>');
        }
    </script>

    <!-- PAGE LEVEL SCRIPT -->
    @yield('injector')
</body>
</html>
