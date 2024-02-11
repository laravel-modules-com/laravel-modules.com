@extends("layouts.app")
@section('title', 'Build modular Laravel applications')
@section('content')

<div class="w-full px-4 mt-32">
    <div class="mx-auto max-w-screen-2xl text-center">
        <h1 class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
            Laravel Modules<br>build modular Laravel applications
        </h1>
        <p class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]">
            Laravel Modules is a package designed to help organize Laravel applications into smaller, reusable, and modular components, enhancing code organization and maintainability.
        </p>
        <ul class="mb-10 flex flex-wrap items-center justify-center gap-5">
            <li>
                <a href="/docs" class="inline-flex items-center justify-center rounded-md bg-white px-7 py-[14px] text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:bg-gray-2 hover:text-body-color">
                    Get Started
                </a>
            </li>
        </ul>

    </div>
</div>

@endsection