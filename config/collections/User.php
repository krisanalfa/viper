<?php

use App\Schema\String;

return [
    'observers' => [
        'Norm\\Observer\\Ownership' => [],
        'Norm\\Observer\\Timestampable' => [],
        'App\\Observer\\UpdateGravatar' => []
    ],
    // Source structure
    'schema' => [
        'username'    => String::create('username')->filter('trim|required|unique:User,username'),
        'email'       => String::create('email')->filter('trim|required|unique:User,email'),
        'first_name'  => String::create('first_name')->filter('trim|required'),
        'last_name'   => String::create('last_name')->filter('trim|required'),
        'birth_place' => String::create('birth_place')->filter('trim|required'),
        'gravatar'    => String::create('gravatar')->filter('trim'),
    ],
];
