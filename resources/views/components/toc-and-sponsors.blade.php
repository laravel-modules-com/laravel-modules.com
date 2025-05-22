
    <x-sidebar-title>On this page</x-sidebar-title>
    @if (count($tableOfContents) > 0)
        <ul class="mt-4 space-y-2 text-sm">
            @foreach($tableOfContents as $item)
                <li class="hover:text-orange-500 text-gray-700 dark:text-gray-300

                @if($item['level'] == 2) font-semibold leading-6 @endif
                @if($item['level'] == 3) ml-4 leading-4 pb-0.5 @endif
                @if($item['level'] == 3 && ($tableOfContents[$loop->index+1]['level']??0) == 2) pb-2 @endif
                ">
                    <a href="#{{ $item['anchor'] }}">{{ $item['title'] }}</a>
                </li>
            @endforeach
        </ul>
    @endif

    <x-sidebar-title class="mt-8">Sponsors</x-sidebar-title>
    <div class="mt-4 flex flex-col gap-4 pl-3">

        <a href="https://nativephp.com/mobile?utm_source=laravelmodules.com&utm_medium=website" title="NativePHP for Mobile" class="w-full bg-white p-4">
            <img src="{{ url('images/sponsors/NativePHP-mobile-light.svg') }}" alt="NativePHP for Mobile" title="NativePHP for Mobile">
        </a>

        <a href="https://dcblog.dev?utm_source=laravelmodules.com&utm_medium=website" target="_blank" class="mt-5">
            <img class="mx-auto text-center rounded-md" src="{{ url('images/sponsors/dcblog.png') }}" alt="David Carr Laravel Developer" title="David Carr Laravel Developer">
        </a>

        <p class="mt-5 flex justify-center relative rounded-full bg-primary text-white px-4 py-1.5 text-sm leading-6">
            <a href="/become-a-sponsor" class="font-semibold text-white"><span class="absolute inset-0" aria-hidden="true"></span> Become a sponsor <span aria-hidden="true">→</span></a>
        </p>

    </div>
