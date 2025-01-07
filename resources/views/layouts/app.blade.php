<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="FcP5XSWeK2YHHMatXtuM7-E-9J8XxZDtCKMtvjz00wM"/>
    @yield('meta')
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ url('favicon.ico') }}" type="image/x-icon">
    <link rel="canonical" href='{{ url()->current() }}'>
    @yield('meta')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @env('production')
        <script src="https://cdn.usefathom.com/script.js" data-site="SDINLFLK" defer></script>
    @endenv
</head>
<body class="bg-gray-900">

<div class="absolute inset-0 -z-10 transform-gpu blur-3xl" aria-hidden="true">
    <div class="w-full h-full bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
</div>

<div x-data="{ sidebarOpen: false }" class="sticky top-0 z-10">
    <header class="text-white bg-gray-900 border-gray-700 border-b">
        <div class="max-w-screen-xl mx-auto px-3 sm:px-6 py-4 flex items-center justify-between gap-6">
            <div class="-mx-2 flex items-center gap-10 xl:flex-1 xl:shrink-0">
                <a href="/" class="hover:opacity-75 bold">
                    Laravel Modules
                </a>
                <div class="hidden md:flex items-center gap-4">
                    <a class="hover:opacity-75" href="/docs">Documentation</a>
                    <a class="hover:opacity-75" href="https://modularlaravel.com?utm_source={{ url()->current() }}&utm_medium=docs&utm_campaign=Laravel Modules" target="_blank">Book</a>
                    <a class="hover:opacity-75" href="https://discord.gg/hkF7BRvRZK" target="_blank">Discord</a>
                </div>
            </div>

            <div class="flex items-center justify-end gap-6 lg:shrink-0">

                <div id="docsearch"></div>

                <div class="flex gap-2 items-center">
                    <a href="https://github.com/nWidart/laravel-modules" class="rounded-md p-1 text-white transition-colors hover:text-gray-300 focus:outline-none focus-visible:ring focus-visible:ring-pink-400/50">
                        <svg class="w-6" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16 0 0 7.16 0 16c0 7.08 4.58 13.06 10.94 15.18.8.14 1.1-.34 1.1-.76 0-.38-.02-1.64-.02-2.98-4.02.74-5.06-.98-5.38-1.88-.18-.46-.96-1.88-1.64-2.26-.56-.3-1.36-1.04-.02-1.06 1.26-.02 2.16 1.16 2.46 1.64 1.44 2.42 3.74 1.74 4.66 1.32.14-1.04.56-1.74 1.02-2.14-3.56-.4-7.28-1.78-7.28-7.9 0-1.74.62-3.18 1.64-4.3-.16-.4-.72-2.04.16-4.24 0 0 1.34-.42 4.4 1.64 1.28-.36 2.64-.54 4-.54 1.36 0 2.72.18 4 .54 3.06-2.08 4.4-1.64 4.4-1.64.88 2.2.32 3.84.16 4.24 1.02 1.12 1.64 2.54 1.64 4.3 0 6.14-3.74 7.5-7.3 7.9.58.5 1.08 1.46 1.08 2.96 0 2.14-.02 3.86-.02 4.4 0 .42.3.92 1.1.76A16.026 16.026 0 0 0 32 16c0-8.84-7.16-16-16-16Z" fill="currentColor"/></svg>
                    </a>
                </div>

                <button class="inline-flex rounded-md p-1 text-gray-400 transition-colors hover:text-gray-300 focus:outline-none focus-visible:ring focus-visible:ring-pink-400/50 lg:hidden" @click.prevent="sidebarOpen = ! sidebarOpen">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <div class="sticky top-0 z-10">
        <nav
            x-show="sidebarOpen"
            class="fixed inset-0 z-20 overflow-hidden lg:hidden"
        >

            <div class="fixed inset-y-0 right-0 w-full max-w-sm">
                <div
                    class="h-full w-full bg-gray-900 border-l border-gray-700"
                >
                    <div class="bg-gray-850 flex h-full flex-col justify-between overflow-y-auto shadow-lg">
                        <!-- Close Button -->
                        <div class="absolute top-0 right-0 pt-4 pr-4">
                            <button type="button" @click.prevent="sidebarOpen = ! sidebarOpen" class="rounded-md p-2 text-gray-400 transition hover:text-gray-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-400/50">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                                    <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="py-16 px-12">
                            @include('menu')
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

     @yield('content')
</div>

</body>
</html>

