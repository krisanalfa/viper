<?php

use App\Schema\String;
use Bono\Markdown\Schema\Markdown;

return [
    'model' => '\\App\\Model\\Toxic',
    'observers' => [
        '\\Norm\\Observer\\Ownership' => [],
        '\\Norm\\Observer\\Timestampable' => [],
        '\\App\\Observer\\SlugObserver' => []
    ],
    // Source structure
    'schema' => [
        'title'    => String::create('title')->filter('required'),
        'content'  => Markdown::create('content')->filter('required'),
        'slug'     => String::create('slug')->filter('trim')->set('generated', true),
    ],
];
