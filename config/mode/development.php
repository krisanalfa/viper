<?php

use Bono\Helper\URL;

// BONO
return [
    // The Middlewares
    'bono.middlewares' => [
        'KrisanAlfa\\Kraken\\Middleware\\ControllerMiddleware',

        'App\\Middleware\\SlugMiddleware',

        'KrisanAlfa\\Theme\\Middleware\\NotificationMiddleware',

        'Bono\\Middleware\\ContentNegotiatorMiddleware',

        'ROH\\BonoAuth\\Middleware\\AuthMiddleware' => [
            'driver'       => 'ROH\\BonoAuth\\Driver\\OAuth',
            'baseUrl'      => 'https://account.app.xinix.co.id/index.php',
            'authUrl'      => '/oauth/auth', // URI to access auth
            'tokenUrl'     => '/oauth/token', // URI to get token
            'revokeUrl'    => '/oauth/revoke', // URI to revoke auth
            'clientId'     => '54d2331ab0460489048b458b.client.account.xinix.co.id',
            'clientSecret' => '8ea12e5cb38689ef0e2cfb94f8f2d546',
            'redirectUri'  => URL::site('/login'), // application redirect url
            'scope'        => 'user',
        ],

        'Bono\\Middleware\\SessionMiddleware',
    ],
];
