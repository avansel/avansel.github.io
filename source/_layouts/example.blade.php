<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <style>
            body, html, .pano{ height: 100%; width: 100%; padding: 0px; margin: 0px;}
        </style>
    </head>
    <body>
        @yield('body')
    </body>
</html>
