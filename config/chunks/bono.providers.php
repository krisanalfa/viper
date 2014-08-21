<?php

// BONO
return [
    // The providers
    'bono.providers' => [
        'Norm\\Provider\\NormProvider',
        'KrisanAlfa\\Blade\\Provider\\BladeProvider',
        'KrisanAlfa\\Kraken\\Provider\\KrakenProvider',
        'App\\Provider\\AppProvider',
        'Bono\\Markdown\\Provider\\MarkdownProvider' => [
            'gfm' => true,
            'partialTemplatePath' => dirname(dirname(__DIR__)).'/templates',
        ],
        'App\\Provider\\AuthRulesProvider',
    ],
];
