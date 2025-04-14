<?php

use App\Supports\StandardMediaDefinitions;

return [
    'definitions' => [
        'product' => StandardMediaDefinitions::class,
    ],
    
    'collection' => 'images',

    'fallback' => [
        'url' => env('FALLBACK_IMAGE_URL', null),
        'path' => env('FALLBACK_IMAGE_PATH', null),
    ],
];
