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
            'gfm' => true, // default false
            'partialTemplatePath' => dirname(dirname(__DIR__)).'/templates', // default is not set, using our own partials
        ],
        'App\\Provider\\AuthRulesProvider',
    ],
];
