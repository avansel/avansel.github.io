<?php

use Illuminate\Support\Str;

return [
    'production' => true,
    'baseUrl' => '/',
    'title' => 'Avansel Viewer',
    'description' => 'Free Easy to use Opensource JavaScript Three.js based panorama / virtual tours viewer.',
    'collections' => [
        
    ],
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'active' : '';
    }
];
