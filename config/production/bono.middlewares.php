<?php

// BONO
return [
    // The Middlewares
    'bono.middlewares' => [
        '\\KrisanAlfa\\Kraken\\Middleware\\ControllerMiddleware',
        '\\Bono\\Middleware\\ContentNegotiatorMiddleware',
        '\\KrisanAlfa\\Theme\\Middleware\\NotificationMiddleware',
        // '\\ROH\\BonoAuth\\Middleware\\AuthMiddleware' => [
        //     'driver' => '\\ROH\\BonoAuth\\Driver\\OAuth',
        //     'debug' => true, // enable or disable debug
        //     'baseUrl' => 'https://account.app.xinix.co.id/index.php',
        //     'authUrl' => '/oauth/auth', // URI to access auth
        //     'tokenUrl' => '/oauth/token', // URI to get token
        //     'revokeUrl' => '/oauth/revoke', // URI to revoke auth
        //     'clientId' => '53f6184bb0460455148b456a.client.account.xinix.co.id',
        //     'clientSecret' => 'ed9d2e5e0ca5e9ddf9b2cc3284bf002c',
        //     'redirectUri' => \Bono\Helper\URL::site('/login'), // application redirect url
        //     'scope' => 'user',
        // ],
        '\\Bono\\Middleware\\SessionMiddleware',
    ],
];
