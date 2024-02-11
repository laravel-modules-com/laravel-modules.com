<div class="px-3">
    <div class="text-left w-full">
        <div
            x-data="{ open: false }"
            @keydown.window.escape="open = false"
            @click.away="open = false"
            class="relative inline-block w-full text-left"
        >
            <div x-show="sidebarOpen" class="sidebar mt-5 prose prose-2xl">
                <ul>
                    <li><a class="hover:opacity-75" href="/docs">Documentation</a></li>
                    <li><a class="hover:opacity-75" href="https://modularlaravel.com?utm_source={{ url()->current() }}&utm_medium=docs&utm_campaign=Laravel Modules" target="_blank">Book</a></li>
                    <li><a class="hover:opacity-75" href="https://discord.gg/hkF7BRvRZK" target="_blank">Discord</a></li>
                </ul>
            </div>

            @if(isset($versions))
            <div>
                <span class="w-full rounded-md shadow-sm">
                    <button
                        @mousedown="open = !open" type="button"
                        class="inline-flex w-full justify-between rounded-md border border-gray-900 bg-white px-4 py-2 text-sm text-gray-900"
                        id="options-menu"
                        aria-haspopup="true"
                        aria-expanded="true"
                        x-bind:aria-expanded="open"
                    >
                        Version {{ current_version() }}

                        <svg class="-mr-1 ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </span>
            </div>
            <div x-show="open" x-cloak class="absolute left-0 z-10 mt-2 w-full origin-top-left rounded-md">
                <div class="rounded-md bg-white border border-gray-900">
                    @foreach($versions as $version)
                        <a href="/docs/{{ $version }}/{{ current_page() }}"
                           class="block px-4 py-2 text-sm text-gray-900 hover:bg-gray-300"
                        >
                            Version {{ $version }}
                        </a>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="sidebar mt-5 prose prose-2xl">
    @if(isset($versions))
        {!! $sidebar !!}
    @endif
</div>