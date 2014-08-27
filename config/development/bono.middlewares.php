<?php

use Bono\Helper\URL;

// BONO
return [
    // The Middlewares
    'bono.middlewares' => [
        '\\KrisanAlfa\\Kraken\\Middleware\\ControllerMiddleware',
        '\\Bono\\Middleware\\ContentNegotiatorMiddleware',
        '\\KrisanAlfa\\Theme\\Middleware\\NotificationMiddleware',
        '\\ROH\\BonoAuth\\Middleware\\AuthMiddleware' => [
            'driver' => '\\ROH\\BonoAuth\\Driver\\OAuth',
            'debug' => true, // enable or disable debug
            'baseUrl' => 'https://account.dev.xinix.co.id/index.php',
            'authUrl' => '/oauth/auth', // URI to access auth
            'tokenUrl' => '/oauth/token', // URI to get token
            'revokeUrl' => '/oauth/revoke', // URI to revoke auth
            'clientId' => '53ecda0795e5b6ce0f8b45b0.client.account.xinix.co.id',
            'clientSecret' => '953d50c8ef5ac7abdb16d02c3df7b5ac',
            'redirectUri' => URL::site('/login'), // application redirect url
            'scope' => 'user',
        ],
        '\\Bono\\Middleware\\SessionMiddleware',
    ],
];
