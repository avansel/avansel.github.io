<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="A9SrjzkuTmuef4L7wRSJJYaH2wiVlEsa4u3nYSGL1Dc">
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

                <header class="py-5 border-bottom">
                    <div class="container pt-md-1 pb-md-4">
                        <h1 class="mt-0">{{ $page->title }}</h1>
                        <p class="lead">{{ $page->description }}</p>
                        <div class="d-flex flex-column flex-md-row gap-3">
                            <a href="/documentation/" class="btn btn-lg btn-primary">
                                Get Started
                            </a>
                            <a href="/examples/" class="btn btn-lg btn-outline-secondary d-flex align-items-center justify-content-center fw-semibold">
                                Explore examples
                            </a>
                        </div>
                    </div>
                </header>


                <div class="my-4 container">
                    <div class="row">
                        <div class="col-md-6">
                            @yield('body')
                        </div>
                        <div class="col-md-6"> 
                            <div id="pano-home" style="height: 500px;"></div>
                        </div>
                    </div>
                </div>

            </div>

            @include('_partials.footer')
        </div>
    </body>
</html>
