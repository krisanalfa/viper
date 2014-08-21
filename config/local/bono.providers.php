<?php

// BONO
return [
    // The providers
    'bono.providers' => [
        'Norm\\Provider\\NormProvider',
        'KrisanAlfa\\Blade\\Provider\\BladeProvider',
        'KrisanAlfa\\Kraken\\Provider\\KrakenProvider',
        'Bono\\Markdown\\Provider\\MarkdownProvider' => [
            'gfm' => true,
            'partialTemplatePath' => dirname(dirname(__DIR__)).'/templates',
        ],
        'App\\Provider\\AppProvider',
        'App\\Provider\\AuthRulesProvider',
    ],
];
