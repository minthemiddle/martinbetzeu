<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description or $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico?v=5">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-grey-lightest text-grey-darkest leading-normal font-sans">
        <header class="border-t-2 flex items-center shadow bg-white border-b h-24 py-4" role="banner">
            <div class="pin-t bg-blue-light h-1 absolute w-full"></div>
            <div class="container flex items-center max-w-xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <h1 class="text-2xl md:text-3xl text-blue font-semibold my-0">{{ $page->siteName }}</h1>
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center">


                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')

        <main role="main" class="flex-auto w-full container max-w-xl mx-auto py-16 px-6">


            @yield('body')
        </main>

        <footer class="bg-white text-center text-sm mt-12 py-4 pin-b" role="contentinfo">
{{-- <div id="vue-search" class="mx-auto">
                <search></search>
            </div> --}}
            <ul class="flex flex-col md:flex-row justify-center list-reset">
                <li class="md:mr-2">
                    &copy; Martin Betz {{ date('Y') }}.
                </li>

                <li>
                    <a href="/privacy">Privacy/GDPR </a>
                </li>
                <li class="ml-2">
                     <a href="/imprint">Imprint</a>
                </li>
                <li class="ml-2">
                    <span id="cntct-me"></span>
                </li>
            </ul>
        </footer>
        <div id="vue-cookie"><cookielaw theme="royal"></cookielaw></div>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script>
            var el = document.getElementById('cntct-me');
            EO(el, {
              name: 'contact+me',
              domain: 'martinbetz',
              tld: 'eu',
              altText: 'Email'
            });
        </script>

        @stack('scripts')
    </body>
</html>
