@extends("layouts.app")
@section('title', $title)
@section('content')

<div class="flex flex-col md:flex-row justify-center mt-5">

    <div class="hidden lg:block w-full md:w-1/5 mb-4 md:mb-0 p-3">

        @include('menu', compact('versions', 'sidebar'))

    </div>

    <div class="w-full md:w-7/12 mb-4 px-10 p-3">

        <h1 class="text-4xl font-bold text-white"># {{ $title }}</h1>

        @include('toc')

        <div class="mt-4 prose prose-md prose-a:text-blue-400 max-w-none">
            <div class="w-100 lg:block h-8 mt-2 text-sm">
                <a href="https://github.com/laravel-modules-com/docs/edit/main/{{ $page }}.md">Edit this page →</a>
            </div>
            <div id="content">
                {!! $content !!}
            </div>

            <hr>

            <p class="text-center mb-10 text-white">
                Laravel Package built by <a class="text-sky-500" href="https://github.com/nwidart" target="_blank">Nicolas Widart</a>.<br>
                Maintained by <a class="text-sky-500" href="https://dcblog.dev?utm_source={{ url()->current() }}&utm_medium=docs&utm_campaign=Laravel Modules" target="_blank">David Carr</a>
                follow on X <a class="text-sky-500" href="https://twitter.com/dcblogdev" target="_blank">@dcblogdev</a>
            </p>

        </div>

    </div>

    <div class="w-full md:w-1/5 mb-4 px-5 text-center">

        <h2 class="mb-5 text-white">Sponsors</h2>

        <a href="https://dcblog.dev?utm_source=laravelmodules.com&utm_medium=website" target="_blank" class="mt-5">
            <img class="mx-auto text-center rounded-md" src="{{ url('images/sponsors/dcblog.png') }}" alt="David Carr Laravel Developer" title="David Carr Laravel Developer">
        </a>

        <a href="/become-a-sponsor" class="mt-5 relative w-full rounded-lg border-2 border-dashed border-gray-300 px-12 py-8 hover:border-sky-300 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 lg:col-span-1 flex gap-2 items-center">
            <span class="w-full text-center font-semibold text-gray-400">Your Logo</span>
        </a>

        <a href="/become-a-sponsor" class="mt-5 relative w-full rounded-lg border-2 border-dashed border-gray-300 px-12 py-8 hover:border-sky-300 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 lg:col-span-1 flex gap-2 items-center">
            <span class="w-full text-center font-semibold text-gray-400">Your Logo</span>
        </a>

        <a href="/become-a-sponsor" class="mt-5 relative w-full rounded-lg border-2 border-dashed border-gray-300 px-12 py-8 hover:border-sky-300 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 lg:col-span-1 flex gap-2 items-center">
            <span class="w-full text-center font-semibold text-gray-400">Your Logo</span>
        </a>

        <p class="mt-5 flex justify-center relative rounded-full bg-primary text-white px-4 py-1.5 text-sm leading-6">
            <a href="/become-a-sponsor" class="font-semibold text-white"><span class="absolute inset-0" aria-hidden="true"></span> Become a sponsor <span aria-hidden="true">→</span></a>
        </p>

    </div>
</div>

@endsection
