<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Devshop' }}</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    @livewireStyles
</head>

<body class="bg-slate-200 dark:bg-slate-700">
    @if (!request()->routeIs('login'))
        @livewire('partials.navbar')
    @endif
    <main>
        {{ $slot }}
    </main>
    @if (!request()->routeIs('login'))
        @livewire('partials.footer')
    @endif
    @livewireScripts
</body>

</html>
