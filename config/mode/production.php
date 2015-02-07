<?php

use Bono\Helper\URL;

// BONO
return [
    // Application Name
    'name' => 'VIPER Production',

    // The Middlewares
    'bono.middlewares' => [
        'KrisanAlfa\\Kraken\\Middleware\\ControllerMiddleware',

        'App\\Middleware\\SlugMiddleware',

        'KrisanAlfa\\Theme\\Middleware\\NotificationMiddleware',

        'Bono\\Middleware\\ContentNegotiatorMiddleware',

        'Bono\\Middleware\\StaticPageMiddleware',

        'ROH\\BonoAuth\\Middleware\\AuthMiddleware' => [
            'driver'       => 'ROH\\BonoAuth\\Driver\\OAuth',
            'baseUrl'      => 'https://account.app.xinix.co.id/index.php',
            'authUrl'      => '/oauth/auth', // URI to access auth
            'tokenUrl'     => '/oauth/token', // URI to get token
            'revokeUrl'    => '/oauth/revoke', // URI to revoke auth
            'clientId'     => '53f6184bb0460455148b456a.client.account.xinix.co.id',
            'clientSecret' => 'ed9d2e5e0ca5e9ddf9b2cc3284bf002c',
            'redirectUri'  => URL::site('/login'), // application redirect url
            'scope'        => 'user',
            'debug'        => true,
        ],

        'Bono\\Middleware\\SessionMiddleware',
    ],
];
