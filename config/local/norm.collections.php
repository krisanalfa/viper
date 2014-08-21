<?php

use Bono\App;

return [
    'norm.collections' => [
        'default' => [
            'observers' => [
                '\\Norm\\Observer\\Ownership' => [],
                '\\Norm\\Observer\\Timestampable' => [],
            ],
        ],
        'resolvers' => [
            '\\Norm\\Resolver\\CollectionResolver' => [
                'collections.path' => App::getInstance()->config('mode').'/collections'
            ],
        ],
    ],
];
