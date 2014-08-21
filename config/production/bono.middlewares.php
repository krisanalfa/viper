<?php

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
            'clientId' => '53eb311c95e5b6cd0f8b4576.client.account.xinix.co.id',
            'clientSecret' => '29ffdce1fbdaeb5f4ae8a9f0a50584fe',
            'redirectUri' => \Bono\Helper\URL::site('/login'), // application redirect url
            'scope' => 'user',
        ],
        '\\Bono\\Middleware\\SessionMiddleware',
    ],
];
