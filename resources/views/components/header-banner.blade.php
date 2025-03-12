@props(['hasMenu' => false])
<div class="sticky top-0 z-50 text-white blur-background bg-gray-50/85 dark:bg-gray-800/85 border-b border-gray-100 dark:border-0">
    <div class="relative flex top-0 left-0 z-50md:grid md:grid-cols-4 items-center justify-between gap-6 px-6 py-3 mx-auto max-w-8xl sm:py-4">
        <div class="flex">
            <a href="/" class="hover:opacity-75 bold mr-10">
                {{ config('app.name') }}
            </a>

            <ul class="hidden md:flex space-x-5">
                <li><a class="hover:opacity-75" href="/docs">Documentation</a></li>
                <li><a class="hover:opacity-75" href="https://modularlaravel.com?utm_source={{ url()->current() }}&utm_medium=docs&utm_campaign=Laravel Modules" target="_blank">Book</a></li>
            </ul>

            <div id="docsearch" class="hidden"></div>

        </div>

        <div class="flex items-center justify-end space-x-5">

            <svg onclick="openSearch()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 cursor-pointer">
                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
            </svg>

            <a href="{{ $discordLink }}">
                <x-icons.discord class="size-5 text-black dark:text-white hover:text-orange-500"/>
            </a>

            <a href="{{ $githubLink }}">
                <x-icons.github class="size-5  dark:fill-white"/>
            </a>

            <button type="button" class="md:hidden" @click="showDocsNavigation = !showDocsNavigation">
                <div x-show="!showDocsNavigation">
                    <x-icons.menu class="w-6 h-6 text-orange-600 dark:text-orange-300"/>
                </div>
                <div x-show="showDocsNavigation">
                    <x-icons.close class="w-6 h-6 text-orange-600"/>
                </div>
            </button>

        </div>
    </div>
</div>
