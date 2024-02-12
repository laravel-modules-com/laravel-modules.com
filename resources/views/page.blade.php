@extends("layouts.app")
@section('title', $title)
@section('content')

<main role="main" class="overflow-hidden lg:flex lg:flex-1 lg:flex-col z-0">
    <div class="max-w-screen-2xl w-full mx-auto px-6 flex flex-wrap justify-between gap-10">
        <div class="fixed -mx-3 overflow-y-auto custom-scrollbar max-h-[calc(100%-74px)] hidden lg:block py-4 lg:max-w-[240px] lg:w-full">

            @include('menu', compact('versions', 'sidebar'))

        </div>

        <div class="hidden lg:block lg:max-w-[240px] lg:w-full"></div>

        <div class="pt-12 overflow-hidden flex-1 mx-auto max-w-prose w-full">
            <h1 class="text-4xl font-bold text-white"># {{ $title }}</h1>

            <div class="xl:hidden">
                @include('toc')
            </div>

            <div class="mt-4 prose prose-md prose-a:text-blue-400 max-w-none">
                <div class="w-100 lg:block h-8 mt-2 text-sm">
                    <a href="https://github.com/laravel-modules-com/docs/edit/main/{{ $page }}.md">Edit this page →</a>
                </div>
                <div id="content">
                    {!! $content !!}
                </div>

                <hr>
                <p class="mb-10">
                    Laravel Package built by <a href="https://github.com/nwidart" target="_blank">Nicolas Widart</a>.<br>
                    Maintained by <a href="https://dcblog.dev?utm_source={{ url()->current() }}&utm_medium=docs&utm_campaign=Laravel Modules" target="_blank">David Carr</a>
                    follow on X <a href="https://twitter.com/dcblogdev" target="_blank">@dcblogdev</a>
                </p>

            </div>
        </div>

        <div class="hidden max-h-[calc(100%-74px)] custom-scrollbar overflow-y-auto xl:fixed xl:right-[max(0px,calc(50%-48rem))] xl:block xl:py-4 xl:pr-3 xl:w-full xl:max-w-[240px] text-white">
            @include('toc')
        </div>
        <div class="hidden xl:block xl:w-full xl:max-w-[240px]"></div>
    </div>
</main>

@endsection