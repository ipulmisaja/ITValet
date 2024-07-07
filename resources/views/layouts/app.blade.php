<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'ITValet' }}</title>

    @vite('resources/js/app.js')

    <link href="https://fonts.cdnfonts.com/css/inter" type="text/css" rel="stylesheet">

    @livewireStyles

    <style>
        [x-cloak] {
            display: none !important
        }
    </style>

    <script>
        if (localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches))
            document.documentElement.classList.add('dark');
        else document.documentElement.classList.remove('dark');
    </script>
</head>

<body
    class="bg-gray-100 dark:bg-gray-900 scrollbar scrollbar-w-3 scrollbar-thumb-rounded-[0.25rem] scrollbar-track-slate-200 scrollbar-thumb-gray-400 dark:scrollbar-track-gray-900 dark:scrollbar-thumb-gray-700">

    <x-pages.notification.flash />

    @guest
        {{ $slot }}
    @endguest

    @auth
        <x-pages.navigation.sidebar />

        <x-pages.navigation.side-header />

        <div class="flex overflow-hidden">
            <main id="main-content" class="w-full h-full overflow-y-auto lg:ml-64 min-h-screen flex flex-col">
                {{ $slot }}

                <x-pages.copyright />
            </main>
        </div>
    @endauth

    @livewireScriptConfig

    {{-- Trix Editor --}}
    <script src="{{ secure_asset('vendor/trix/trix.min.js') }}" data-navigate-once></script>

    {{-- Tom Select JS --}}
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js" data-navigate-once></script>

    {{-- System Notification --}}
    <script data-navigate-once>
        window.addEventListener('notification', event => {
            window.dispatchEvent(new CustomEvent('notify', {
                detail: event.detail.message
            }));
        })
    </script>

    @stack('scripts')
</body>

</html>
