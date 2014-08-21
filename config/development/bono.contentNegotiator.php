<?php

// BONO
return [
    // Content Negotiatior
    'bono.contentNegotiator' => [
        'extensions' => [
            'json' => 'application/json',
        ],
        'views' => [
            'application/json' => '\\Bono\\View\\JsonView',
        ],
    ],
];
