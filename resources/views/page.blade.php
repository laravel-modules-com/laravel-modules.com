@extends("layouts.app")
@section('title', $title)
@section('content')

<div x-data="{ sidebarOpen: false }" class="sticky top-0 z-10">
    <header class="bg-gray-850/90 bg-white border-gray-700/40 border-b">
        <div class="max-w-screen-2xl mx-auto px-6 py-4 flex items-center justify-between gap-6">
            <div class="-mx-2 flex items-center gap-10 xl:flex-1 xl:shrink-0">
                <a href="/" class="inline-flex items-center rounded-md px-2 py-1 transition hover:opacity-75 focus:outline-none focus-visible:ring focus-visible:ring-pink-400/50">
                    logo
                </a>
                <div class="flex items-center gap-1">
                    <a href="/">Menu</a>
                </div>
            </div>

            <div class="flex items-center justify-end gap-6 lg:shrink-0">
                <div
                    id="js-search-input"
                    class="docsearch-input__wrapper relative hidden md:block"
{{--                    x-data="{--}}
{{--                        init() {--}}
{{--                            docsearch({--}}
{{--                                appId: '418WMK58D6',--}}
{{--                                apiKey: '4c5d415abd4c0c167f4368e679076c09',--}}
{{--                                indexName: 'livewire-framework-3',--}}
{{--                                inputSelector: '#docsearch-input',--}}
{{--                                debug: true, // Set debug to true if you want to inspect the dropdown--}}
{{--                            })--}}
{{--                        },--}}
{{--                        handleKeydown(e) {--}}
{{--                            // '/'--}}
{{--                            if (e.keyCode == 191) {--}}
{{--                                document.getElementById('docsearch-input').focus();--}}
{{--                                e.preventDefault()--}}
{{--                            }--}}

{{--                            // 'cmd+k'--}}
{{--                            if (e.keyCode == 75 && (e.metaKey == true || e.ctrlKey == true)) {--}}
{{--                                document.getElementById('docsearch-input').focus();--}}
{{--                                e.preventDefault()--}}
{{--                            }--}}

{{--                            // 'esc'--}}
{{--                            if (e.keyCode == 27) {--}}
{{--                                document.getElementById('docsearch-input').blur();--}}
{{--                                e.preventDefault()--}}
{{--                            }--}}
{{--                        },--}}
{{--                    }"--}}
                >
                    <label for="search" class="sr-only">Search</label>
                    <input
                        id="docsearch-input"
                        class="docsearch-input border-gray-900/60 block w-full rounded-[10px] border bg-white pl-10 pr-4 py-2.5 text-sm text-gray-300 placeholder-gray-600 outline-none"
                        name="docsearch"
                        type="text"
                        placeholder="Search"
                        @keydown.window="handleKeydown"
                    >

                    <div class="pointer-events-none absolute inset-0 left-3 flex items-center" aria-hidden="true">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 9.167a5.917 5.917 0 1 1 11.833 0 5.917 5.917 0 0 1-11.833 0ZM9.167 1.75a7.417 7.417 0 1 0 4.687 13.165l2.282 2.282a.75.75 0 0 0 1.061-1.06l-2.282-2.283A7.417 7.417 0 0 0 9.167 1.75Z" fill="#475569" opacity=".8"/></svg>
                    </div>
                </div>

                <div class="flex gap-2 items-center">
                    <a href="#" class="rounded-md p-1 text-gray-400 transition-colors hover:text-gray-300 focus:outline-none focus-visible:ring focus-visible:ring-pink-400/50">
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

    <nav
        x-show="sidebarOpen"
        class="fixed inset-0 z-20 overflow-hidden lg:hidden"
    >

        <div class="fixed inset-y-0 right-0 w-full max-w-sm">
            <div
                class="h-full w-full bg-white"
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

                    <!-- Body -->
                    <div class="py-16 px-12">
                        @include('menu', compact('versions', 'sidebar'))
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>


<main role="main" class="overflow-hidden lg:flex lg:flex-1 lg:flex-col z-0">
    <div class="max-w-screen-2xl w-full mx-auto px-6 flex flex-wrap justify-between gap-10">
        <div class="fixed -mx-3 overflow-y-auto custom-scrollbar max-h-[calc(100%-74px)] hidden lg:block py-14 lg:max-w-[240px] lg:w-full">

            @include('menu', compact('versions', 'sidebar'))

        </div>

        <div class="hidden lg:block lg:max-w-[240px] lg:w-full"></div>

        <div class="pt-12 docsearch-content overflow-hidden flex-1 mx-auto max-w-prose w-full">
            <h1 class="text-4xl font-bold text-gray-800">{{ $title }}</h1>

            <div class="xl:hidden">
                @include('toc')
            </div>

            <div class="mt-4 prose prose-violet prose-a:text-violet-500 max-w-none prose-pre:bg-slate-100 prose-pre:text-slate-700 prose-headings:scroll-m-20">
                {!! $content !!}
            </div>
        </div>

        <div class="hidden max-h-[calc(100%-74px)] custom-scrollbar overflow-y-auto xl:fixed xl:right-[max(0px,calc(50%-48rem))] xl:block xl:py-14 xl:pr-3 xl:w-full xl:max-w-[240px]">
            @include('toc')
        </div>
        <div class="hidden xl:block xl:w-full xl:max-w-[240px]"></div>
    </div>
</main>

@endsection