<?php

// BONO
return [
    // Application Controller using Kraken Container
    'kraken.controllers' => array(
        'default' => '\\KrisanAlfa\\Kraken\\Controller\\NormController',
        'mapping' => [
            '/user'  => null,
            '/toxic'  => null,
        ],
        'dependencies' => [
        ],
    ),
];
