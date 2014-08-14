<?php

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
                'collections.path' => 'chunks/collections'
            ],
        ],
    ],
];
