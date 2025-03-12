@php

$path = $docsPath = resource_path('views/docs');
$versions = [];
foreach (glob($path.'/*', GLOB_ONLYDIR) as $dir) {
    $versions[] = basename($dir);
}

natsort($versions);
$versions = array_reverse($versions);

@endphp

<div
    x-data="{ open: false }"
    @keydown.window.escape="open = false"
    @click.away="open = false"
    class="relative inline-block w-full text-left"
>
    <div class="mb-5">
        <div class="w-full rounded-md shadow-sm">
            <button
                @mousedown="open = !open" type="button"
                class="inline-flex w-full justify-between rounded-md border border-gray-800 px-4 py-2 text-sm text-white"
                id="options-menu"
                aria-haspopup="true"
                aria-expanded="true"
                x-bind:aria-expanded="open"
            >
                Version {{ current_version() }}

                <svg class="-mr-1 ml-2 h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div x-show="open" x-cloak class="absolute left-0 z-10 w-full origin-top-left rounded-md">
            <div class="rounded-md bg-gray-800 border border-gray-900">
                @foreach($versions as $version)
                    <a href="/docs/{{ $version }}"
                       class="block px-4 py-2 text-sm text-white hover:bg-gray-600"
                    >
                        Version {{ $version }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

</div>
