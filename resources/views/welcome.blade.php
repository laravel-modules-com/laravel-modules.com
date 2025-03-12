<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="FcP5XSWeK2YHHMatXtuM7-E-9J8XxZDtCKMtvjz00wM"/>
    <meta name="color-scheme" content="dark">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <link rel="canonical" href='{{ url()->current() }}'>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=be-vietnam-pro:700|inter:400,500,600|rubik:400,700" rel="stylesheet" />
    @vite(["resources/css/app.css", "resources/js/app.js"])

    @env('production')
        <script src="https://cdn.usefathom.com/script.js" data-site="SDINLFLK" defer></script>
    @endenv
</head>
<body class="background-pattern w-full h-screen text-slate-900 bg-gray-50 dark:bg-gray-900 dark:text-white">

<main id="app" class="flex flex-col items-center min-h-screen">
    <header class="flex flex-col items-center flex-1 gap-12 text-center md:py-12">

        <h1 class="lg:text-8xl md:text-6xl drop-shadow-2xl md:mt-9 mt-6 text-4xl font-bold">
            Laravel Modules<br>build modular Laravel applications
        </h1>

        <p class="text-2xl px-6 mt-6 leading-tight">
            Laravel Modules is a package designed to help organize Laravel applications into smaller, reusable, and modular components, enhancing code organization and maintainability.
        </p>

        <div class="flex flex-col items-center mt-6 sm:flex-row sm:space-x-6">

            <a href="/docs/12" class="w-full px-12 py-4 text-lg font-bold text-gray-900 bg-white border rounded-lg sm:w-auto focus:outline-none">
                Get started
            </a>

            <a href="{{ $githubLink }}" target="_blank" class="w-full px-12 py-4 mt-3 text-lg font-bold text-gray-900 border rounded-lg dark:text-white sm:w-auto focus:outline-none sm:mt-0 bg-gray-50 dark:bg-gray-900">
                Source code
            </a>

        </div>

    </header>

</main>

</body>
</html>
