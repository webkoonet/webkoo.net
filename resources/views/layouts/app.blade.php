<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Hreflang SEO Tags --}}
    @php
        $currentPath = request()->path();
        $queryParams = empty(request()->query->all()) ? '' : '?' . http_build_query(request()->query->all());
        $pathWithoutLocale = str_replace('/id', '', $currentPath);
        if (empty($pathWithoutLocale)) $pathWithoutLocale = '/';
    @endphp
    <link rel="alternate" hreflang="en" href="{{ url('/') . ($pathWithoutLocale === '/' ? '' : '/' . $pathWithoutLocale) . $queryParams }}">
    <link rel="alternate" hreflang="id" href="{{ url('/id') . ($pathWithoutLocale === '/' ? '' : $pathWithoutLocale) . $queryParams }}">
    <link rel="alternate" hreflang="x-default" href="{{ url('/') . ($pathWithoutLocale === '/' ? '' : '/' . $pathWithoutLocale) . $queryParams }}">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('fonts.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-gray-50 text-gray-900 antialiased min-h-screen flex flex-col">
    {{-- Header Component --}}
    @include('components.header-content')

    {{-- Main Content --}}
    <main class="flex-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <p class="text-center text-sm text-gray-600">
                &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
            </p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
