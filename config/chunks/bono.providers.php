<?php

// BONO
return [
    // The providers
    'bono.providers' => [
        'App\\Provider\\VersionProvider' => [
            // Enter the team hostnames computer here
            'local' => [
                'supernova.local',
            ],

            // Enter the remote hostnames computer here
            'remote' => [
                'supernova.remote',
            ],
        ],
        'Norm\\Provider\\NormProvider',
        'KrisanAlfa\\Kraken\\Provider\\KrakenProvider',
        'Bono\\Markdown\\Provider\\MarkdownProvider' => [
            'gfm' => true,
            'partialTemplatePath' => dirname(dirname(__DIR__)).'/templates',
        ],
        'App\\Provider\\AppProvider',
        'App\\Provider\\AuthRulesProvider',
    ],
];
