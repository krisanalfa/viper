<?php

use Bono\Helper\URL;

// BONO
return [
    // The Middlewares
    'bono.middlewares' => [
        'KrisanAlfa\\Kraken\\Middleware\\ControllerMiddleware',
        'KrisanAlfa\\Theme\\Middleware\\NotificationMiddleware',
        'Bono\\Middleware\\ContentNegotiatorMiddleware',
        'ROH\\BonoAuth\\Middleware\\AuthMiddleware' => [
            'driver'       => 'ROH\\BonoAuth\\Driver\\OAuth',
            'baseUrl'      => 'https://account.dev.xinix.co.id/index.php',
            'authUrl'      => '/oauth/auth', // URI to access auth
            'tokenUrl'     => '/oauth/token', // URI to get token
            'revokeUrl'    => '/oauth/revoke', // URI to revoke auth
            'clientId'     => '53ea025b95e5b692058b4660.client.account.xinix.co.id',
            'clientSecret' => '443e3061967c6e548800c22182e2fe3b',
            'redirectUri'  => URL::site('/login'), // application redirect url
            'scope'        => 'user',
        ],
        'Bono\\Middleware\\SessionMiddleware',
    ],
];
