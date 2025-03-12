<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="color-scheme" content="dark">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"/>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=be-vietnam-pro:700|inter:400,500,600|rubik:400,700" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    @vite(["resources/css/app.css", "resources/js/app.js"])

    @env('production')
        <script src="https://cdn.usefathom.com/script.js" data-site="SDINLFLK" defer></script>
    @endenv
</head>
<body
    x-data="{ showDocsNavigation: false }"
    class="min-h-screen font-sans antialiased bg-white dark:bg-gray-900 dark:text-white
@isset($backgroundPattern) background-pattern bg-fixed @endisset
">

<x-header-banner :hasMenu="$hasMenu ?? false" />
{{ $slot }}
<script src="https://cdn.jsdelivr.net/npm/@docsearch/js@3"></script>
<script>
    function openSearch() {
        if (!window.docsearchInstance) {
            window.docsearchInstance = docsearch({
                appId: 'UZ1YTL5HNE',
                apiKey: '57ee2719e0cd664678db3d2f397f281e',
                indexName: 'laravelmodules',
                insights: true,
                container: '#docsearch',
                debug: false
            });
        }
        document.querySelector('.DocSearch-Button').click();
    }
</script>
</body>
</html>
