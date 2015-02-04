<?php

// BONO
return [
    // Application Controller using Kraken Container
    'kraken.controller' => array(
        'default' => 'KrisanAlfa\\Kraken\\Controller\\NormController',
        'mapping' => [
            '/user'  => null,
            '/toxic'  => null,
        ],
    ),
];
