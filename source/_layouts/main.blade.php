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
        <link rel="stylesheet" href="//unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/tokyo-night-dark.min.css">
    </head>
    <body class="min-vh-100">
        <div class="d-flex flex-column justify-content-between min-vh-100">
            <div>
                @include('_partials.header-menu')

                <header class="py-4 border-bottom">
                    <div class="container">
                        <h1 class="mt-0">{{ $page->title }}</h1>
                        <p class="lead">{{ $page->description }}</p>
                    </div>
                </header>
                <div class="my-4 container">
                    @yield('body')
                </div>
            </div>

            @include('_partials.footer')
        </div>
    </body>
</html>
