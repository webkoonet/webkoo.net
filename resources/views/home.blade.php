@extends('layouts.app')

@section('content')
{{-- Hero Wrapper - menyatukan background untuk hero dan client section --}}
<div class="relative -mt-16">
    {{-- Background Image - menyatu untuk hero dan client section --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('storage/assets/img/bg-hero.webp') }}"
             alt="Hero Background"
             class="w-full h-full object-cover">
    </div>

    {{-- Hero Content Section - h-screen --}}
    <section class="relative z-10 h-screen flex items-center justify-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-3 leading-tight text-wrap break-words">
                {{ __('messages.make_website') }} <span id="rotating-text" class="inline-block transition-all duration-500 min-h-[1.2em] font-light">{{ __('messages.business') }}</span>
            </h1>
            <p class="text-sm sm:text-base md:text-lg text-gray-500 mb-8 sm:mb-10 max-w-2xl mx-auto leading-relaxed px-4">
                {{ __('messages.hero_description') }}
            </p>

            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 px-4">
                <a href="#contact"
                   class="w-full sm:w-auto px-6 sm:px-8 py-2.5 sm:py-3 bg-gradient-to-r from-[#323232] to-[#000000] text-white font-semibold rounded-full hover:opacity-90 transition-opacity shadow-lg text-sm sm:text-base">
                    {{ __('messages.build_website') }}
                </a>
                <a href="#portfolio"
                   class="w-full sm:w-auto px-6 sm:px-8 py-2.5 sm:py-3 bg-white text-gray-900 font-semibold rounded-full shadow-lg hover:shadow-xl transition-shadow text-sm sm:text-base">
                    {{ __('messages.view_demo') }}
                </a>
            </div>
        </div>
    </section>

    {{-- Trusted By / Clients Section --}}
    <section class="relative z-10 pb-12 sm:pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6 sm:mb-8">
            <p class="text-center text-[10px] sm:text-xs text-gray-600 font-semibold tracking-wide uppercase leading-normal">
                {{ __('messages.trusted_by') }}
            </p>
        </div>

        {{-- Static Logo Grid - Grid di mobile, Flex di desktop --}}
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Grid Layout - Mobile: 2 cols, Tablet: 4 cols, Desktop: Flex horizontal --}}
            <div class="grid grid-cols-3 sm:grid-cols-4 lg:flex lg:items-center lg:justify-center gap-3 sm:gap-4 lg:gap-14 -mb-0 sm:-mb-8">
                {{-- Client 1 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center">
                    <img src="{{ asset('storage/assets/img/client-1.webp') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-[80px] sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 2 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center">
                    <img src="{{ asset('storage/assets/img/client-2.webp') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-[80px] sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 3 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center">
                    <img src="{{ asset('storage/assets/img/client-3.webp') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-[80px] sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 4 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center">
                    <img src="{{ asset('storage/assets/img/client-4.webp') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-[80px] sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 5 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center col-span-2 sm:col-span-1 lg:col-span-auto">
                    <img src="{{ asset('storage/assets/img/client-5.webp') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-[80px] sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 6 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center col-span-2 sm:col-span-1 lg:col-span-auto">
                    <img src="{{ asset('storage/assets/img/client-6.webp') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-[80px] sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 7 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center col-span-2 sm:col-span-1 lg:col-span-auto">
                    <img src="{{ asset('storage/assets/img/client-7.png') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-[80px] sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 8 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center col-span-2 sm:col-span-1 lg:col-span-auto">
                    <img src="{{ asset('storage/assets/img/client-8.png') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-[80px] sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
            </div>
        </div>
    </section>
</div>

{{-- Scroll Animation Section --}}
<section id="welcome-section" class="relative" style="height: 350vh;">
    {{-- Gradient Background - sticky saat scroll, lalu ikut scroll setelah section selesai --}}
    <div id="gradient-bg" class="fixed inset-0 opacity-0 transition-opacity duration-700 pointer-events-none -z-10"
         style="background: linear-gradient(180deg, #091524 0%, #1c2d55 100%);">
    </div>

    {{-- Sticky Container - tetap di tengah layar saat scroll --}}
    <div class="sticky top-0 flex items-center justify-center h-screen overflow-hidden">
        <div class="flex flex-col items-center justify-between h-full px-4 sm:px-6 md:px-8 py-6 sm:py-8 md:py-12 pt-20 sm:pt-24 md:pt-32">
            {{-- Welcome Text - Top --}}
            <p id="welcome-text" class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold text-white opacity-0 transition-opacity duration-700 text-center px-4 leading-tight">
                {{ __('messages.welcome_text') }}
            </p>

            {{-- Logo - Middle --}}
            <div id="scrolling-logo" class="relative transition-all duration-300 ease-out opacity-0 scale-150">
                <div class="w-24 h-24 sm:w-28 sm:h-28 md:w-32 md:h-32 bg-gray-200/50 backdrop-blur-md border border-gray-300/60 rounded-3xl flex items-center justify-center shadow-lg">
                    {{-- Mata --}}
                    <div class="absolute w-16 h-24 sm:w-20 sm:h-20 md:w-24 md:h-24 flex justify-between items-start pt-4 sm:pt-5 md:pt-6">
                        <div class="w-2 h-2 sm:w-2.5 sm:h-2.5 md:w-3 md:h-3 bg-gray-900 rounded-full"></div>
                        <div class="w-2 h-2 sm:w-2.5 sm:h-2.5 md:w-3 md:h-3 bg-gray-900 rounded-full"></div>
                    </div>
                    {{-- Senyum --}}
                    <div class="absolute w-10 h-5 sm:w-12 sm:h-6 md:w-14 md:h-7 border-b-3 sm:border-b-4 border-gray-900 rounded-b-full"></div>
                </div>

                {{-- Green Checkmark Icon - Right side --}}
                <div class="absolute -right-4 top-3 w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7 bg-green-500 rounded-full flex items-center justify-center shadow-md">
                    <svg class="w-2.5 h-2.5 sm:w-3 sm:h-3 md:w-3.5 md:h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
            </div>

            {{-- Bottom Section - Description & Button --}}
            <div class="flex flex-col items-center pb-4 sm:pb-6 md:pb-8">
                <p id="description-text" class="mb-3 sm:mb-4 text-xs sm:text-sm md:text-base text-white opacity-0 transition-all duration-700 text-center max-w-[200px] sm:max-w-xs md:max-w-xs leading-relaxed font-normal">
                    {!! __('messages.description_text') !!}
                </p>

                <a id="cta-button" href="#services"
                   class="px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 bg-white text-gray-900 text-xs sm:text-sm font-semibold rounded-full opacity-0 transition-all duration-700 hover:bg-white/90 hover:scale-105 shadow-lg leading-normal">
                    {{ __('messages.explore_services') }}
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Services Section - 3 Cards --}}
<section id="services" class="relative py-20 sm:py-28 md:py-32 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('storage/assets/img/background-blue.webp') }}');">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-left mb-12 sm:mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-white leading-tight">
                Pilih jenis website anda
            </h2>
        </div>

        {{-- Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Website Builder Card --}}
            <div class="group bg-gray-900/70 backdrop-blur-xl rounded-2xl shadow-lg hover:shadow-2xl hover:bg-gray-900/80 transition-all duration-300 overflow-hidden border border-white/10">
                <div class="flex items-center justify-center p-8">
                    <img src="{{ asset('storage/assets/img/website-builder-display.png') }}" alt="Website Builder" class="w-full h-auto object-contain rounded-xl max-h-[180px]">
                </div>
                <div class="p-8">
                    {{-- Title --}}
                    <h3 class="text-xl sm:text-2xl font-bold text-white mb-3 leading-tight">Website Builder</h3>
                    {{-- Description --}}
                    <p class="text-white/80 mb-6 leading-relaxed">
                        Fast, affordable websites using modern drag-and-drop builders. Perfect for small businesses and startups.
                    </p>
                    {{-- Features List --}}
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-white/80 font-medium leading-normal">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Quick deployment (3-5 days)
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/80 font-medium leading-normal">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Easy to manage
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/80 font-medium leading-normal">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Budget-friendly
                        </li>
                    </ul>
                    {{-- CTA --}}
                    <a href="#webkoo-builder" class="inline-flex items-center gap-2 text-blue-400 font-semibold hover:text-blue-300 group-hover:gap-3 transition-all">
                        Learn more
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- WordPress Card --}}
            <div class="group bg-gray-900/70 backdrop-blur-xl rounded-2xl shadow-lg hover:shadow-2xl hover:bg-gray-900/80 transition-all duration-300 overflow-hidden border border-white/10">
                <div class="flex items-center justify-center p-8">
                    <img src="{{ asset('storage/assets/img/website-wordpress-display.png') }}" alt="WordPress" class="w-full h-auto object-contain rounded-xl max-h-[180px]">
                </div>
                <div class="p-8">
                    {{-- Title --}}
                    <h3 class="text-xl sm:text-2xl font-bold text-white mb-3 leading-tight">WordPress</h3>
                    {{-- Description --}}
                    <p class="text-white/80 mb-6 leading-relaxed">
                        Flexible and scalable CMS solution. Ideal for blogs, content sites, and growing businesses.
                    </p>
                    {{-- Features List --}}
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-white/80 font-medium leading-normal">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Custom theme development
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/80 font-medium leading-normal">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Plugin integration
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/80 font-medium leading-normal">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            SEO optimized
                        </li>
                    </ul>
                    {{-- CTA --}}
                    <a href="#wordpress" class="inline-flex items-center gap-2 text-blue-400 font-semibold hover:text-blue-300 group-hover:gap-3 transition-all">
                        Learn more
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Custom Development Card --}}
            <div class="group bg-gray-900/70 backdrop-blur-xl rounded-2xl shadow-lg hover:shadow-2xl hover:bg-gray-900/80 transition-all duration-300 overflow-hidden border border-white/10">
                <div class="relative flex items-center justify-center p-8">
                    <div class="relative">
                        {{-- Experience Badge --}}
                        <div class="absolute -top-3 -right-3 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg z-20 animate-pulse">
                            5+ Years
                        </div>

                        <img src="{{ asset('storage/assets/img/jerry.webp') }}" alt="Jerry - Freelance Developer" class="w-full h-auto object-contain rounded-xl grayscale max-h-[180px]">

                        {{-- Tech Stack Floating Badges --}}
                        <div class="absolute -left-2 top-1/4 opacity-80 group-hover:opacity-100 group-hover:-left-3 transition-all duration-300">
                            <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-lg p-2 shadow-lg">
                                <svg aria-hidden="true" class="w-5 h-5 text-red-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="absolute -right-2 top-1/2 -translate-y-1/2 opacity-80 group-hover:opacity-100 group-hover:-right-3 transition-all duration-300">
                            <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-lg p-2 shadow-lg">
                                <svg aria-hidden="true" class="w-5 h-5 text-indigo-400" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="absolute -left-2 bottom-1/4 opacity-80 group-hover:opacity-100 group-hover:-left-3 transition-all duration-300">
                            <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-lg p-2 shadow-lg">
                                <img src="{{ asset('storage/assets/img/logo-mysql.png') }}" alt="MySQL" class="w-5 h-5 object-contain">
                            </div>
                        </div>
                    </div>

                    {{-- Freelancer Label --}}
                    <div class="absolute bottom-2 left-0 right-0 text-center">
                        <div>
                            <span class="block text-sm font-bold text-white leading-normal">Jerry</span>
                            <span class="block text-xs text-white/80 leading-normal">Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    {{-- Title --}}
                    <h3 class="text-xl sm:text-2xl font-bold text-white mb-3 leading-tight">Custom Development</h3>
                    {{-- Description --}}
                    <p class="text-white/80 mb-6 leading-relaxed">
                        Fully custom web applications built from scratch. For unique requirements and enterprise solutions.
                    </p>
                    {{-- Features List --}}
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-white/80 font-medium leading-normal">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Tailored architecture
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/80 font-medium leading-normal">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Scalable & secure
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/80 font-medium leading-normal">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Full ownership
                        </li>
                    </ul>
                    {{-- CTA --}}
                    <a href="#custom" class="inline-flex items-center gap-2 text-blue-400 font-semibold hover:text-blue-300 group-hover:gap-3 transition-all">
                        Learn more
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Testimonial Section --}}
<section id="testimonials" class="bg-white py-16 lg:py-24 overflow-hidden">
    <div class="w-full px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-gray-900 mb-4 leading-tight">{{ __('messages.trusted_by') }}</h2>
            <p class="text-base sm:text-lg text-gray-600 leading-relaxed">{{ __('messages.testimonial_subtitle') }}</p>
        </div>

        {{-- Peek-a-boo Testimonial Slider --}}
        <div class="relative">
            {{-- Slider Container --}}
            <div id="testimonial-slider" class="relative w-full h-80 cursor-grab active:cursor-grabbing">
                @php
                    $testimonials = [
                        [
                            'name' => 'Ahmad Pratama',
                            'role' => 'Founder, TokoOnline',
                            'content' => 'Website yang dibuat Webkoo sangat profesional dan meningkatkan penjualan kami hingga 300%. Sangat recommended!',
                            'rating' => 5
                        ],
                        [
                            'name' => 'Siti Rahayu',
                            'role' => 'Owner, Kafe Senja',
                            'content' => 'Pelayanan excellent dan hasil website sesuai ekspektasi. Tim Webkoo sangat responsif dan mudah diajak kerjasama.',
                            'rating' => 5
                        ],
                        [
                            'name' => 'Budi Santoso',
                            'role' => 'CEO, Startup Indo',
                            'content' => 'Solusi custom development dari Webkoo membantu bisnis kami bertransformasi digital dengan lancar. Top quality!',
                            'rating' => 5
                        ],
                        [
                            'name' => 'Dewi Lestari',
                            'role' => 'Marketing Manager, BrandXYZ',
                            'content' => 'Website company profile yang elegan dan modern. Klien kami sangat impressed dengan hasil kerja Webkoo.',
                            'rating' => 5
                        ],
                        [
                            'name' => 'Rizky Ramadhan',
                            'role' => 'Founder, E-Commerce Store',
                            'content' => 'Migration to platform baru berjalan smooth tanpa downtime. Webkoo benar-benar expert di bidangnya.',
                            'rating' => 5
                        ]
                    ];
                @endphp

                @foreach($testimonials as $index => $testimonial)
                    <div class="testimonial-slide absolute top-0 left-1/2 -translate-x-1/2 flex-shrink-0 w-80 md:w-96 transition-all duration-300 ease-out"
                         data-index="{{ $index }}">
                        <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                            {{-- Rating Stars --}}
                            <div class="flex gap-1 mb-4">
                                @for($i = 1; $i <= $testimonial['rating']; $i++)
                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>

                            {{-- Testimonial Content --}}
                            <p class="text-gray-700 mb-6 leading-relaxed">"{{ $testimonial['content'] }}"</p>

                            {{-- Author Info --}}
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center text-white font-bold text-lg">
                                    {{ substr($testimonial['name'], 0, 1) }}
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 leading-normal">{{ $testimonial['name'] }}</h4>
                                    <p class="text-sm text-gray-600 leading-normal">{{ $testimonial['role'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Client Logos Grid --}}
        <div class="mt-10 max-w-6xl mx-auto">
            {{-- Grid Layout - Mobile: 2 cols, Tablet: 4 cols, Desktop: Flex horizontal --}}
            <div class="grid grid-cols-3 sm:grid-cols-4 lg:flex lg:items-center lg:justify-center gap-3 sm:gap-4 lg:gap-14">
                {{-- Client 1 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center">
                    <img src="{{ asset('storage/assets/img/client-1.webp') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-20 sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 2 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center">
                    <img src="{{ asset('storage/assets/img/client-2.webp') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-20 sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 3 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center">
                    <img src="{{ asset('storage/assets/img/client-3.webp') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-20 sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 4 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center">
                    <img src="{{ asset('storage/assets/img/client-4.webp') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-20 sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 5 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center col-span-2 sm:col-span-1 lg:col-span-auto">
                    <img src="{{ asset('storage/assets/img/client-5.webp') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-20 sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 6 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center col-span-2 sm:col-span-1 lg:col-span-auto">
                    <img src="{{ asset('storage/assets/img/client-6.webp') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-20 sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 7 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center col-span-2 sm:col-span-1 lg:col-span-auto">
                    <img src="{{ asset('storage/assets/img/client-7.png') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-20 sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 8 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity flex items-center justify-center col-span-2 sm:col-span-1 lg:col-span-auto">
                    <img src="{{ asset('storage/assets/img/client-8.png') }}"
                         alt="Client Logo"
                         class="h-16 sm:h-20 lg:h-24 max-w-20 sm:max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Migration Section dengan Animasi --}}
<section class="relative py-12 sm:py-16 overflow-hidden" id="migration-section">
    <style>
        /* Migration Animation Keyframes */
        @keyframes migration-float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        @keyframes migration-pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(34, 197, 94, 0.2); }
            50% { box-shadow: 0 0 40px rgba(34, 197, 94, 0.5); }
        }
        @keyframes data-flow-particle {
            0% { transform: translateX(0) scale(1); opacity: 1; }
            50% { transform: translateX(150px) scale(0.7); opacity: 0.6; }
            100% { transform: translateX(300px) scale(1); opacity: 1; }
        }
        @keyframes data-flow-icon-move {
            0% { left: 0%; transform: scale(0.7); opacity: 0; }
            15% { opacity: 0.5; transform: scale(0.85); }
            30% { opacity: 1; transform: scale(1); }
            50% { transform: scale(1.3); }
            70% { opacity: 1; transform: scale(1); }
            85% { opacity: 0.5; transform: scale(0.85); }
            100% { left: calc(100% - 40px); transform: scale(0.7); opacity: 0; }
        }
        @keyframes server-light-blink {
            0%, 100% { background-color: #ef4444; box-shadow: 0 0 5px #ef4444; }
            50% { background-color: #22c55e; box-shadow: 0 0 10px #22c55e; }
        }
        @keyframes progress-bar-fill {
            0% { width: 0%; }
            100% { width: 75%; }
        }
        @keyframes progress-bar-fill-complete {
            0% { width: 75%; }
            100% { width: 100%; }
        }
        @keyframes old-server-fade-out {
            0% { opacity: 0.5; transform: translateX(0) scale(1); }
            100% { opacity: 0 !important; transform: translateX(-50px) scale(0.9); visibility: hidden; }
        }
        @keyframes new-server-slide-center {
            0% { transform: translateX(0) scale(1); }
            25% { transform: translateX(-50px) scale(1.03); }
            50% { transform: translateX(-100px) scale(1.08); }
            75% { transform: translateX(-150px) scale(1.12); }
            100% { transform: translateX(-200px) scale(1.15); }
        }
        @keyframes success-text-appear {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes progress-bar-fade-out {
            0% { opacity: 1; transform: scaleY(1); }
            100% { opacity: 0; transform: scaleY(0); }
        }
        @keyframes success-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(34, 197, 94, 0.4); }
            50% { box-shadow: 0 0 40px rgba(34, 197, 94, 0.8), 0 0 60px rgba(34, 197, 94, 0.4); }
        }

        /* Celebration Animation Classes */
        .old-server-fade-out { animation: old-server-fade-out 0.8s ease-out forwards; }
        .new-server-center { animation: new-server-slide-center 0.8s ease-out forwards; }
        .success-text-appear { animation: success-text-appear 0.6s ease-out 0.8s forwards; opacity: 0; }
        .progress-bar-fade { animation: progress-bar-fade-out 0.5s ease-out forwards; transform-origin: top; }
        .success-glow { animation: success-glow 1.5s ease-in-out infinite; }
        @keyframes fade-in-up {
            0% { transform: translateY(30px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        @keyframes slide-in-left {
            0% { transform: translateX(-50px); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }
        @keyframes bounce-check {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.15); }
        }
        @keyframes card-hover-lift {
            0% { transform: translateY(0); }
            100% { transform: translateY(-8px); }
        }

        /* Animation Classes */
        .migration-float { animation: migration-float 4s ease-in-out infinite; }
        .migration-pulse { animation: migration-pulse-glow 2s ease-in-out infinite; }
        .data-flow { animation: data-flow-particle 2.5s ease-in-out infinite; }
        .data-flow-icon { animation: data-flow-icon-move 4s ease-in-out infinite; }
        .server-light { animation: server-light-blink 2s ease-in-out infinite; }
        .progress-animate { animation: progress-bar-fill 3s ease-out forwards; }
        .progress-animate-complete { animation: progress-bar-fill-complete 2s ease-out forwards; }
        .fade-in-up { animation: fade-in-up 0.6s ease-out forwards; }
        .slide-in-left { animation: slide-in-left 0.5s ease-out forwards; }
        .bounce-check { animation: bounce-check 0.5s ease-in-out; }

        /* Delays */
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }
        .delay-600 { animation-delay: 0.6s; }
        .delay-700 { animation-delay: 0.7s; }
        .delay-800 { animation-delay: 0.8s; }
        .delay-1000 { animation-delay: 1s; }

        /* Initial hidden state */
        .migration-animate-init {
            opacity: 0;
        }

        /* Card hover effects */
        .migration-card {
            transition: all 0.3s ease;
        }
        .migration-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
    </style>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header with Animation --}}
        <div class="text-center mb-8 migration-animate-init fade-in-up">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gray-100 border border-gray-200 rounded-full mb-4">
                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                </svg>
                <span class="text-gray-800 text-sm font-medium">Migrasi Gratis</span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-gray-900 leading-tight">
                Sudah Punya Website? Ingin Berpindah?
            </h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto text-center leading-relaxed">
                Pindahkan website Anda ke Webkoo tanpa biaya migrasi. Nikmati biaya perpanjangan yang terjangkau dan performa yang lebih baik.
            </p>
        </div>

        {{-- Migration Process Visualization --}}
        <div class="mb-8 migration-animate-init fade-in-up delay-200">
            {{-- Server Animation - Old to New --}}
            <div id="server-container" class="flex items-center justify-center gap-4 sm:gap-8 mt-16 mb-8 relative">
                {{-- Old Server --}}
                <div id="old-server" class="flex-1 text-center migration-float opacity-50">
                    <div class="relative inline-block">
                        <div class="w-24 h-20 sm:w-32 sm:h-24 bg-gradient-to-br from-gray-400 to-gray-500 rounded-xl shadow-lg p-2 mx-auto relative overflow-hidden grayscale transition-opacity duration-500">
                            <div class="absolute top-1 left-1 right-1 flex gap-1">
                                <div class="flex-1 h-1 bg-gray-500 rounded"></div>
                                <div class="w-1.5 h-1 bg-red-500 rounded-full"></div>
                                <div class="w-1.5 h-1 bg-red-500 rounded-full"></div>
                            </div>
                            <div class="mt-2 space-y-1">
                                <div class="h-0.5 bg-gray-400 rounded"></div>
                                <div class="h-0.5 bg-gray-400 rounded"></div>
                            </div>
                            <div class="absolute bottom-1 left-1 right-1 flex justify-between">
                                <span class="text-xs text-gray-400">OLD</span>
                                <div class="flex gap-0.5">
                                    <div class="w-1 h-1 bg-red-500 rounded-full"></div>
                                    <div class="w-1 h-1 bg-red-500 rounded-full"></div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -top-1.5 -right-1.5 w-5 h-5 bg-red-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-gray-600">Website Lama</p>
                </div>

                {{-- Data Flow Animation - Website Elements Icons --}}
                <div id="data-flow" class="flex-1 relative h-24 sm:h-32">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="relative w-full max-w-[200px] sm:max-w-[280px] md:max-w-[400px] lg:max-w-[500px] xl:max-w-[600px] h-24 sm:h-32">
                            {{-- Database Icon --}}
                            <div class="absolute top-0 left-0 data-flow-icon bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl p-1.5 sm:p-2 flex items-center justify-center shadow-lg" style="animation-delay: 0s;">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                                </svg>
                            </div>
                            {{-- File/Document Icon --}}
                            <div class="absolute top-2 sm:top-4 left-0 data-flow-icon bg-gradient-to-br from-gray-600 to-gray-700 rounded-xl p-1.5 sm:p-2 flex items-center justify-center shadow-lg" style="animation-delay: 0.8s;">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                            {{-- Image/Photo Icon --}}
                            <div class="absolute top-4 sm:top-8 left-0 data-flow-icon rounded-xl p-1.5 sm:p-2 flex items-center justify-center shadow-lg" style="background: linear-gradient(to bottom right, #673de6, #673de6); animation-delay: 1.6s;">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            {{-- Code Icon --}}
                            <div class="absolute top-6 sm:top-12 left-0 data-flow-icon bg-gradient-to-br from-green-500 to-green-600 rounded-xl p-1.5 sm:p-2 flex items-center justify-center shadow-lg" style="animation-delay: 2.4s;">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                            {{-- Settings/Config Icon --}}
                            <div class="absolute top-8 sm:top-16 left-0 data-flow-icon bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl p-1.5 sm:p-2 flex items-center justify-center shadow-lg" style="animation-delay: 3.2s;">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- New Server --}}
                <div id="new-server" class="flex-1 text-center migration-float delay-300">
                    <div class="relative inline-block">
                        <div class="w-24 h-20 sm:w-32 sm:h-24 bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl shadow-xl p-2 mx-auto relative overflow-hidden">
                            <div class="absolute top-1 left-1 right-1 flex gap-1">
                                <div class="flex-1 h-1 bg-gray-500 rounded"></div>
                                <div class="w-1.5 h-1 bg-green-500 rounded-full server-light"></div>
                                <div class="w-1.5 h-1 bg-green-500 rounded-full server-light delay-200"></div>
                            </div>
                            <div class="mt-2 space-y-1">
                                <div class="h-0.5 bg-gray-500 rounded"></div>
                                <div class="h-0.5 bg-gray-500 rounded"></div>
                            </div>
                            <div class="absolute bottom-1 left-1 right-1 flex justify-between">
                                <span class="text-xs text-gray-300">NEW</span>
                                <div class="flex gap-0.5">
                                    <div class="w-1 h-1 bg-green-500 rounded-full server-light"></div>
                                    <div class="w-1 h-1 bg-green-500 rounded-full server-light delay-100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -top-2 -right-2 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-gray-900 font-medium">Website Baru ✨</p>

                    {{-- Success Text - Hidden initially --}}
                    <div id="migration-success-text" class="hidden mt-4 mb-12">
                        <div class="inline-flex flex-col items-center bg-white/80 backdrop-blur-md border border-white/30 text-gray-900 px-6 py-3 rounded-xl shadow-lg">
                            <div class="flex items-center justify-center gap-2">
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="font-bold text-lg">Migrasi Berhasil!</span>
                            </div>
                            <p class="text-xs text-gray-600 mt-1 text-center">Website Anda sudah pindah ✨</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Progress Bar --}}
            <div class="bg-white rounded-2xl shadow-lg p-4 my-20 border border-gray-100 max-w-md mx-auto">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm font-medium text-gray-700">Progress Migrasi</span>
                    <span id="migration-progress-text" class="text-base font-bold text-gray-900">0%</span>
                </div>
                <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                    <div id="migration-progress-bar" class="h-full bg-gray-900 rounded-full w-0"></div>
                </div>
            </div>

            {{-- Migration Steps - Animated Cards --}}
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
                {{-- Step 1 - Backup Data --}}
                <div id="migration-step-1" class="migration-card rounded-xl p-3 border migration-animate-init fade-in-up delay-300 text-center" data-step="1">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center mx-auto mb-2 step-icon">
                        <svg class="w-4 h-4 text-white step-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-xs step-title">Backup Data</h4>
                    <p class="text-xs step-status">Menunggu</p>
                </div>

                {{-- Step 2 - Transfer DB --}}
                <div id="migration-step-2" class="migration-card rounded-xl p-3 border migration-animate-init fade-in-up delay-400 text-center" data-step="2">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center mx-auto mb-2 step-icon">
                        <svg class="w-4 h-4 text-white step-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-xs step-title">Transfer DB</h4>
                    <p class="text-xs step-status">Menunggu</p>
                </div>

                {{-- Step 3 - Transfer Files --}}
                <div id="migration-step-3" class="migration-card rounded-xl p-3 border migration-animate-init fade-in-up delay-500 text-center" data-step="3">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center mx-auto mb-2 step-icon">
                        <svg class="w-4 h-4 text-white step-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-xs step-title">Transfer Files</h4>
                    <p class="text-xs step-status">Menunggu</p>
                </div>

                {{-- Step 4 - DNS Config --}}
                <div id="migration-step-4" class="migration-card rounded-xl p-3 border migration-animate-init fade-in-up delay-600 text-center" data-step="4">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center mx-auto mb-2 step-icon">
                        <svg class="w-4 h-4 text-white step-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-xs step-title">DNS Config</h4>
                    <p class="text-xs step-status">Menunggu</p>
                </div>

                {{-- Step 5 - Testing --}}
                <div id="migration-step-5" class="migration-card rounded-xl p-3 border migration-animate-init fade-in-up delay-700 text-center" data-step="5">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center mx-auto mb-2 step-icon">
                        <svg class="w-4 h-4 text-white step-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-xs step-title">Testing</h4>
                    <p class="text-xs step-status">Menunggu</p>
                </div>

                {{-- Step 6 - Go Live --}}
                <div id="migration-step-6" class="migration-card rounded-xl p-3 border migration-animate-init fade-in-up delay-800 text-center" data-step="6">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center mx-auto mb-2 step-icon">
                        <svg class="w-4 h-4 text-white step-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-xs step-title">Go Live!</h4>
                    <p class="text-xs step-status">Menunggu</p>
                </div>
            </div>
        </div>

        {{-- Main Content Grid --}}
        <div class="space-y-6">
            {{-- Benefits List - Horizontal --}}
            <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6 migration-animate-init fade-in-up delay-100">
                {{-- Benefit 1 --}}
                <div class="flex items-center gap-2 bg-white rounded-xl px-4 py-3 border border-gray-200">
                    <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-semibold text-gray-900">Migrasi Gratis</span>
                </div>

                {{-- Benefit 2 --}}
                <div class="flex items-center gap-2 bg-white rounded-xl px-4 py-3 border border-gray-200">
                    <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-semibold text-gray-900">Performa Lebih Cepat</span>
                </div>

                {{-- Benefit 3 --}}
                <div class="flex items-center gap-2 bg-white rounded-xl px-4 py-3 border border-gray-200">
                    <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-semibold text-gray-900">Tanpa Downtime</span>
                </div>

                {{-- Benefit 4 --}}
                <div class="flex items-center gap-2 bg-white rounded-xl px-4 py-3 border border-gray-200">
                    <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-semibold text-gray-900">Proses Cepat</span>
                </div>
            </div>

            {{-- Highlight Card, Support Card & CTA --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                {{-- Highlight Card - Perpanjangan Murah --}}
                <div class="migration-animate-init fade-in-up delay-500 bg-white rounded-2xl p-4 border border-gray-200 migration-card w-full sm:w-64">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gray-900 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-sm font-bold text-gray-900">Hemat Biaya</h3>
                            <p class="text-xs text-gray-600">Mulai Rp 489.000/tahun</p>
                        </div>
                    </div>
                </div>

                {{-- Support Card --}}
                <div class="migration-animate-init fade-in-up delay-600 bg-white rounded-2xl p-4 border border-gray-200 migration-card w-full sm:w-64">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-gray-900 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-sm font-bold text-gray-900">Support 24/7</h3>
                            <p class="text-xs text-gray-600">Via WhatsApp</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CTA Button --}}
            <div class="text-center">
                <a href="https://wa.me/6281234567890?text=Halo%20Webkoo,%20saya%20ingin%20migrasi%20website%20saya%20ke%20Webkoo"
                   target="_blank"
                   class="migration-animate-init fade-in-up delay-700 group inline-flex items-center justify-center gap-3 px-8 py-4 bg-gray-900 text-white font-bold rounded-2xl hover:bg-gray-800 hover:scale-105 transition-all duration-300 shadow-xl">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    <span>Migrasi Sekarang via WhatsApp</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    {{-- Animation Trigger Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Trigger animations when migration section is visible
            const migrationSection = document.getElementById('migration-section');
            const migrationAnimateElements = document.querySelectorAll('.migration-animate-init');
            const progressBar = document.getElementById('migration-progress-bar');
            const progressText = document.getElementById('migration-progress-text');

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        // Step state configurations
        const stepStates = {
            waiting: {
                cardClass: 'bg-gray-50 border-gray-200',
                iconClass: 'bg-gray-300',
                titleClass: 'text-gray-500',
                statusText: 'Menunggu',
                statusClass: 'text-gray-400',
                svg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>'
            },
            'in-progress': {
                cardClass: 'bg-blue-50 border-blue-200',
                iconClass: 'bg-blue-600',
                titleClass: 'text-blue-900',
                statusText: 'Sedang...',
                statusClass: 'text-blue-600 font-medium',
                svg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>'
            },
            complete: {
                cardClass: 'bg-white border-gray-200',
                iconClass: 'bg-gray-900',
                titleClass: 'text-gray-900',
                statusText: 'Selesai',
                statusClass: 'text-gray-600',
                svg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>'
            }
        };

        // Set step state
        function setStepState(stepNum, state) {
            const step = document.getElementById(`migration-step-${stepNum}`);
            if (!step) return;

            const config = stepStates[state];
            const card = step;
            const icon = step.querySelector('.step-icon');
            const svg = step.querySelector('.step-svg');
            const title = step.querySelector('.step-title');
            const status = step.querySelector('.step-status');

            // Clear all state classes
            card.className = card.className.replace(/bg-\w+-\d+/g, '').replace(/border-\w+-\d+/g, '');
            icon.className = icon.className.replace(/bg-\w+-\d+/g, '');
            title.className = title.className.replace(/text-\w+-\d+/g, '');
            status.className = status.className.replace(/text-\w+-\d+/g, '').replace(/font-medium/g, '');

            // Apply new state classes
            card.classList.add(...config.cardClass.split(' '));
            icon.classList.add(...config.iconClass.split(' '));
            title.classList.add(...config.titleClass.split(' '));
            status.classList.add(...config.statusClass.split(' '));

            // Update SVG
            svg.innerHTML = config.svg;

            // Update status text
            status.textContent = config.statusText;

            // Handle animation for icon
            if (state === 'in-progress') {
                svg.classList.add('animate-spin');
            } else {
                svg.classList.remove('animate-spin');
            }

            // Add bounce animation for complete
            if (state === 'complete') {
                svg.classList.add('bounce-check');
            } else {
                svg.classList.remove('bounce-check');
            }
        }

        // Reset all steps to waiting
        function resetAllSteps() {
            for (let i = 1; i <= 6; i++) {
                setStepState(i, 'waiting');
            }
        }

        // Progress bar animation with step updates
        function animateProgress() {
            if (!progressBar || !progressText) return;

            // Reset
            progressBar.style.width = '0%';
            progressBar.style.transition = 'none';
            progressText.textContent = '0%';
            resetAllSteps();

            // Force reflow
            void progressBar.offsetWidth;

            // Track which steps have been updated
            let step1Done = false, step2Done = false, step3Done = false;
            let step4Started = false, step5Started = false, step6Started = false;

            // Phase 1: 0% -> 75% (3 seconds)
            progressBar.style.transition = 'width 3s ease-out';
            progressBar.style.width = '75%';

            // Update progress and steps during first phase
            let progress1 = 0;
            const interval1 = setInterval(() => {
                progress1 += 1.25; // 75 / 60 (assuming ~60fps for 3s)
                if (progress1 >= 75) {
                    progress1 = 75;
                    clearInterval(interval1);
                }
                progressText.textContent = Math.round(progress1) + '%';

                // Update steps based on progress
                if (progress1 >= 12 && !step1Done) { setStepState(1, 'complete'); step1Done = true; }
                if (progress1 >= 25 && !step2Done) { setStepState(2, 'complete'); step2Done = true; }
                if (progress1 >= 37 && !step3Done) { setStepState(3, 'complete'); step3Done = true; }

            }, 50);

            // Phase 2: Pause 3 seconds, then 75% -> 100% (2 seconds)
            setTimeout(() => {
                progressBar.style.transition = 'width 2s ease-out';
                progressBar.style.width = '100%';

                // Update progress and remaining steps during second phase
                let progress2 = 75;
                const interval2 = setInterval(() => {
                    progress2 += 0.42; // 25 / 60 (for 2s)
                    progressText.textContent = Math.round(progress2) + '%';

                    // Update remaining steps
                    if (progress2 >= 80 && !step4Started) { setStepState(4, 'in-progress'); step4Started = true; }
                    if (progress2 >= 82 && step4Started) { setStepState(4, 'complete'); }
                    if (progress2 >= 86 && !step5Started) { setStepState(5, 'in-progress'); step5Started = true; }
                    if (progress2 >= 88 && step5Started) { setStepState(5, 'complete'); }
                    if (progress2 >= 92 && !step6Started) { setStepState(6, 'in-progress'); step6Started = true; }
                    if (progress2 >= 95 && step6Started) { setStepState(6, 'complete'); }

                    // Trigger celebration when complete
                    if (progress2 >= 100) {
                        clearInterval(interval2);
                        setTimeout(() => {
                            triggerCelebration();
                        }, 300);
                    }
                }, 50);
            }, 3000); // 3s delay after reaching 75%
        }

        // Celebration effects
        function triggerCelebration() {
            const serverContainer = document.getElementById('server-container');
            const oldServer = document.getElementById('old-server');
            const dataFlow = document.getElementById('data-flow');
            const newServer = document.getElementById('new-server');

            // Stop data flow icons animation
            const icons = document.querySelectorAll('.data-flow-icon');
            icons.forEach(icon => {
                icon.style.animation = 'none';
                icon.style.opacity = '0';
            });

            // Hide old server and data flow
            if (oldServer) {
                oldServer.style.transition = 'all 0.6s ease-out';
                oldServer.style.opacity = '0';
                oldServer.style.flex = '0';
                oldServer.style.width = '0';
                setTimeout(() => { oldServer.style.display = 'none'; }, 600);
            }
            if (dataFlow) {
                dataFlow.style.transition = 'all 0.6s ease-out';
                dataFlow.style.opacity = '0';
                dataFlow.style.flex = '0';
                dataFlow.style.width = '0';
                setTimeout(() => { dataFlow.style.display = 'none'; }, 600);
            }

            // Center and scale new server after layout updates
            if (newServer) {
                newServer.classList.remove('migration-float');
                newServer.style.transition = 'transform 0.8s ease-out 0.3s';
                setTimeout(() => {
                    newServer.style.transform = 'scale(1.15)';
                }, 300);
            }

            // Fade out progress bar
            const progressBarContainer = progressBar?.closest('.bg-white');
            if (progressBarContainer) {
                progressBarContainer.style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';
                progressBarContainer.style.opacity = '0';
                progressBarContainer.style.transform = 'scaleY(0)';
                setTimeout(() => { progressBarContainer.style.display = 'none'; }, 500);
            }

            // Show success text
            const successText = document.getElementById('migration-success-text');
            if (successText) {
                successText.classList.remove('hidden');
                successText.style.transition = 'opacity 0.6s ease-out 0.5s, transform 0.6s ease-out 0.5s';
                successText.style.opacity = '0';
                successText.style.transform = 'translateY(-20px)';
                setTimeout(() => {
                    successText.style.opacity = '1';
                    successText.style.transform = 'translateY(0)';
                }, 50);
            }

            // Update server lights to all green and stop animation
            const serverLights = document.querySelectorAll('.server-light');
            serverLights.forEach(light => {
                light.style.backgroundColor = '#22c55e';
                light.style.boxShadow = '0 0 10px #22c55e';
                light.style.animation = 'none';
            });
        }

        const migrationObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    migrationAnimateElements.forEach(el => {
                        el.style.opacity = '1';
                    });
                    // Start data flow icons animation with random delays
                    const icons = document.querySelectorAll('.data-flow-icon');
                    // Create array of indices and shuffle
                    const indices = Array.from({length: icons.length}, (_, i) => i);
                    // Shuffle array
                    for (let i = indices.length - 1; i > 0; i--) {
                        const j = Math.floor(Math.random() * (i + 1));
                        [indices[i], indices[j]] = [indices[j], indices[i]];
                    }
                    icons.forEach((icon, originalIndex) => {
                        // Stop animation first
                        icon.style.animation = 'none';
                        icon.style.opacity = '0';
                        // Start animation with random delay
                        const randomDelay = indices.indexOf(originalIndex) * 800;
                        setTimeout(() => {
                            icon.style.animation = '';
                            icon.style.opacity = '';
                        }, randomDelay);
                    });
                    // Start progress animation
                    animateProgress();
                    migrationObserver.unobserve(migrationSection);
                }
            });
        }, observerOptions);

        if (migrationSection) {
            migrationObserver.observe(migrationSection);
        }
        });
    </script>
</section>

{{-- Pricing Section - Glassmorphism Style --}}
<section class="relative py-24 sm:py-32 overflow-hidden" id="pricing-section">
    {{-- Animated Background --}}
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900"></div>
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 rounded-full blur-3xl" style="background: rgba(103, 61, 230, 0.2);"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/5 border border-white/10 rounded-full mb-6 backdrop-blur-md">
                <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                <span class="text-white/80 text-sm font-medium">Transparan & Terjangkau</span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold text-white mb-4 tracking-tight">
                Paket & Harga Website
            </h2>
            <p class="text-lg text-white/60 max-w-2xl mx-auto leading-relaxed">
                Pilih paket yang sesuai dengan kebutuhan bisnis Anda. Semua paket sudah termasuk hosting premium, SSL gratis, dan support prioritas.
            </p>
        </div>

        {{-- Pricing Cards - Glassmorphism Style --}}
        <div class="grid md:grid-cols-3 gap-6 lg:gap-8">

            {{-- Free Plan --}}
            <div class="group relative bg-white/5 backdrop-blur-xl rounded-3xl border border-white/10 hover:border-white/20 transition-all duration-500 overflow-hidden">
                {{-- Subtle gradient overlay on hover --}}
                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="relative p-8">
                    {{-- Icon/Header --}}
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500" style="background: #323232;">
                        <img src="{{ asset('storage/assets/img/logo.webp') }}" alt="Webkoo" class="w-8 h-8 object-contain">
                    </div>

                    <h3 class="text-xl font-bold text-white mb-2">Website Builder</h3>
                    <p class="text-white/50 text-sm mb-6">Cocok untuk pemula & UMKM</p>

                    <div class="mb-6">
                        <span class="text-5xl font-bold text-white tracking-tight">GRATIS</span>
                    </div>

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3 text-sm text-white/70">
                            <div class="w-5 h-5 bg-emerald-500/20 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Drag & drop builder</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-white/70">
                            <div class="w-5 h-5 bg-emerald-500/20 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>50+ template premium</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-white/70">
                            <div class="w-5 h-5 bg-emerald-500/20 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Gratis selamanya</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-white/40">
                            <div class="w-5 h-5 bg-white/5 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                            <span>Domain custom</span>
                        </li>
                    </ul>

                    <a href="https://wa.me/6281234567890?text=Halo%20Webkoo,%20saya%20tertarik%20paket%20Website%20Builder%20GRATIS"
                       target="_blank"
                       class="group/btn inline-flex items-center justify-center gap-2 w-full px-6 py-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl text-white font-medium transition-all duration-300">
                        <span>Mulai Gratis</span>
                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- WordPress Plan - Featured --}}
            <div class="group relative backdrop-blur-xl rounded-3xl border-2 hover:border-opacity-50 transition-all duration-500 overflow-hidden scale-105 shadow-2xl" style="background: linear-gradient(to bottom right, rgba(59, 130, 246, 0.1), rgba(103, 61, 230, 0.1)); border-color: rgba(59, 130, 246, 0.3); box-shadow: 0 25px 50px -12px rgba(59, 130, 246, 0.1);">
                {{-- Glow effect --}}
                <div class="absolute -top-20 -right-20 w-40 h-40 bg-blue-400/20 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-20 -left-20 w-40 h-40 rounded-full blur-3xl" style="background: rgba(103, 61, 230, 0.2);"></div>

                {{-- Popular Badge --}}
                <div class="absolute top-0 right-0 text-white text-xs font-bold px-4 py-1.5 rounded-bl-2xl" style="background: linear-gradient(to right, #3b82f6, #673de6);">
                    POPULER
                </div>

                <div class="relative p-8">
                    {{-- Icon/Header --}}
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <img src="{{ asset('storage/assets/img/wordpress-logo.png') }}" alt="WordPress" class="w-8 h-8 object-contain">
                    </div>

                    <h3 class="text-xl font-bold text-white mb-2">Website WordPress</h3>
                    <p class="text-white/50 text-sm mb-6">Paling banyak dipilih</p>

                    <div class="mb-6">
                        <div class="flex items-baseline gap-2">
                            <span class="text-white/40 line-through text-lg">Rp989.000</span>
                            <span class="text-5xl font-bold text-white tracking-tight">Rp789K</span>
                        </div>
                        <p class="text-white/50 text-sm mt-1">Pertama • perpanjangan Rp489K/thn</p>
                    </div>

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3 text-sm text-white/70">
                            <div class="w-5 h-5 bg-blue-500/20 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>WordPress profesional</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-white/70">
                            <div class="w-5 h-5 bg-blue-500/20 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Domain .com gratis</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-white/70">
                            <div class="w-5 h-5 bg-blue-500/20 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Hosting super cepat</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-white/70">
                            <div class="w-5 h-5 bg-blue-500/20 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>SSL gratis</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-white/70">
                            <div class="w-5 h-5 bg-blue-500/20 rounded-lg flex items-center justify-center shrink-0">
                                <svg class="w-3 h-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Support prioritas</span>
                        </li>
                    </ul>

                    <a href="https://wa.me/6281234567890?text=Halo%20Webkoo,%20saya%20tertarik%20paket%20WordPress%20Rp789.000"
                       target="_blank"
                       class="group/btn inline-flex items-center justify-center gap-2 w-full px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 rounded-xl text-white font-semibold transition-all duration-300 shadow-lg shadow-blue-500/30 hover:shadow-blue-500/50">
                        <span>Pilih Paket Ini</span>
                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Custom Plan --}}
            <div class="group relative bg-white/5 backdrop-blur-xl rounded-3xl border border-white/10 hover:border-white/20 transition-all duration-500 overflow-hidden">
                {{-- Subtle gradient overlay on hover --}}
                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <div class="relative p-8">
                    {{-- Icon/Header --}}
                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500" style="background: linear-gradient(to bottom right, #673de6, #673de6);">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-white mb-2">Website Custom</h3>
                    <p class="text-white/50 text-sm mb-6">Untuk kebutuhan khusus & enterprise</p>

                    <div class="mb-6">
                        <span class="text-5xl font-bold text-white tracking-tight">Rp1.5K+</span>
                        <p class="text-white/50 text-sm mt-1">Mulai dari • sesuai kebutuhan</p>
                    </div>

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3 text-sm text-white/70">
                            <div class="w-5 h-5 rounded-lg flex items-center justify-center shrink-0" style="background: rgba(103, 61, 230, 0.2);">
                                <svg class="w-3 h-3" style="color: #673de6;" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Desain eksklusif</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-white/70">
                            <div class="w-5 h-5 rounded-lg flex items-center justify-center shrink-0" style="background: rgba(103, 61, 230, 0.2);">
                                <svg class="w-3 h-3" style="color: #673de6;" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Fitur custom sesuai request</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-white/70">
                            <div class="w-5 h-5 rounded-lg flex items-center justify-center shrink-0" style="background: rgba(103, 61, 230, 0.2);">
                                <svg class="w-3 h-3" style="color: #673de6;" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Optimasi performa maksimal</span>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-white/70">
                            <div class="w-5 h-5 rounded-lg flex items-center justify-center shrink-0" style="background: rgba(103, 61, 230, 0.2);">
                                <svg class="w-3 h-3" style="color: #673de6;" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Consulting & maintenance</span>
                        </li>
                    </ul>

                    <a href="https://wa.me/6281234567890?text=Halo%20Webkoo,%20saya%20tertarik%20paket%20Website%20Custom"
                       target="_blank"
                       class="group/btn inline-flex items-center justify-center gap-2 w-full px-6 py-3 bg-white/5 hover:bg-white/10 border border-white/10 rounded-xl text-white font-medium transition-all duration-300">
                        <span>Konsultasi Dulu</span>
                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

        {{-- Bottom CTA --}}
        <div class="mt-16 text-center">
            <p class="text-white/50 text-sm mb-4">Butuh bantuan memilih paket yang tepat?</p>
            <a href="https://wa.me/6281234567890?text=Halo%20Webkoo,%20saya%20butuh%20rekomendasi%20paket%20website"
               target="_blank"
               class="inline-flex items-center gap-3 px-8 py-4 bg-white/5 hover:bg-white/10 border border-white/10 rounded-2xl text-white font-medium transition-all duration-300 hover:scale-105 backdrop-blur-md group">
                <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                <span>Chat dengan kami</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<script>
    const texts = [
        '{{ __('messages.business') }}',
        '{{ __('messages.branding') }}',
        '{{ __('messages.revenue') }}'
    ];
    let currentIndex = 0;
    const textElement = document.getElementById('rotating-text');

    setInterval(() => {
        textElement.style.opacity = '0';
        textElement.style.transform = 'translateY(-10px)';

        setTimeout(() => {
            currentIndex = (currentIndex + 1) % texts.length;
            textElement.textContent = texts[currentIndex];
            textElement.style.opacity = '1';
            textElement.style.transform = 'translateY(0)';
        }, 500);
    }, 3000);

    // Scroll Animation untuk Logo dan Welcome Text
    const welcomeSection = document.getElementById('welcome-section');
    const scrollingLogo = document.getElementById('scrolling-logo');
    const welcomeText = document.getElementById('welcome-text');
    const descriptionText = document.getElementById('description-text');
    const ctaButton = document.getElementById('cta-button');
    const gradientBg = document.getElementById('gradient-bg');
    const header = document.querySelector('header');

    // Track scroll direction
    let lastScrollY = window.scrollY;
    let scrollDirection = 'down';

    if (welcomeSection && scrollingLogo && welcomeText && descriptionText && ctaButton && gradientBg) {
        window.addEventListener('scroll', function() {
            const rect = welcomeSection.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            const currentScrollY = window.scrollY;

            // Track scroll direction
            scrollDirection = currentScrollY > lastScrollY ? 'down' : 'up';
            lastScrollY = currentScrollY;

            // Hitung progress berdasarkan seberapa jauh section sudah discroll
            // Section height 250vh, sticky container h-screen
            // Progress = 0 saat section top = 0, progress = 1 saat section selesai
            const scrolledDistance = -rect.top;
            const totalScrollDistance = rect.height - windowHeight;

            let progress = scrolledDistance / totalScrollDistance;
            progress = Math.max(0, Math.min(1, progress));

            // Hide/Show Header based on sticky behavior
            // Hide header when sticky content is active (section top at viewport top, section still has scroll)
            // Show header when sticky behavior ends (section bottom <= viewport bottom) OR before section starts
            if (rect.top <= 0 && rect.bottom > windowHeight && header) {
                // Sticky is active - hide header
                header.style.transform = 'translateY(-100%)';
            } else if ((rect.bottom <= windowHeight || rect.top > 0) && header) {
                // Sticky ended OR before section starts - show header
                header.style.transform = 'translateY(0)';
            }

            // Gradient background: sticky saat scroll aktif, lalu ikut scroll setelah section selesai
            // Fade in saat section masuk viewport
            if (rect.top <= windowHeight && rect.bottom > 0) {
                gradientBg.style.opacity = '1';
            }

            // Ubah posisi gradient berdasarkan scroll direction dan section position
            // Saat scroll ke bawah dan section selesai: ubah ke absolute dengan height 100vh
            if (scrollDirection === 'down' && rect.bottom <= windowHeight) {
                if (!gradientBg.classList.contains('absolute')) {
                    gradientBg.classList.remove('fixed');
                    gradientBg.classList.add('absolute');
                    gradientBg.style.top = 'auto';
                    gradientBg.style.bottom = '0';
                    gradientBg.style.height = '100vh'; // Satu layar penuh, bukan seluruh section
                }
            }
            // Saat scroll ke atas dan section mulai muncul kembali: ubah ke fixed (sticky)
            else if (scrollDirection === 'up' && rect.bottom > windowHeight) {
                if (!gradientBg.classList.contains('fixed')) {
                    gradientBg.classList.remove('absolute');
                    gradientBg.classList.add('fixed');
                    gradientBg.style.top = '';
                    gradientBg.style.bottom = '';
                    gradientBg.style.height = '';
                }
            }
            // Reset ke fixed saat scroll kembali ke atas section
            else if (rect.top > 0) {
                if (!gradientBg.classList.contains('fixed')) {
                    gradientBg.classList.remove('absolute');
                    gradientBg.classList.add('fixed');
                    gradientBg.style.top = '';
                    gradientBg.style.bottom = '';
                    gradientBg.style.height = '';
                }
            }

            // Animasi logo: opacity dan scale
            // Stage 1: Logo muncul dari opacity 0 ke 1 (0 - 0.25)
            if (progress < 0.25) {
                const logoOpacity = progress / 0.25;
                const logoScale = 1.5 - (progress / 0.25) * 0.5; // dari 1.5 ke 1.0
                scrollingLogo.style.opacity = logoOpacity.toString();
                scrollingLogo.style.transform = `scale(${logoScale})`;
                welcomeText.style.opacity = '0';
                descriptionText.style.opacity = '0';
                descriptionText.style.transform = 'translateY(20px)';
                ctaButton.style.opacity = '0';
                ctaButton.style.transform = 'translateY(20px)';
            }
            // Stage 2: Logo mengecil lebih lanjut (dari 1.0 ke 0.6) (0.25 - 0.5)
            else if (progress < 0.5) {
                const stageProgress = (progress - 0.25) / 0.25;
                const logoScale = 1.0 - stageProgress * 0.4; // dari 1.0 ke 0.6
                scrollingLogo.style.opacity = '1';
                scrollingLogo.style.transform = `scale(${logoScale})`;
                welcomeText.style.opacity = '0';
                descriptionText.style.opacity = '0';
                descriptionText.style.transform = 'translateY(20px)';
                ctaButton.style.opacity = '0';
                ctaButton.style.transform = 'translateY(20px)';
            }
            // Stage 3: Teks muncul (0.5 - 0.75)
            else if (progress < 0.75) {
                const textOpacity = (progress - 0.5) / 0.25;
                scrollingLogo.style.opacity = '1';
                scrollingLogo.style.transform = 'scale(0.6)';
                welcomeText.style.opacity = Math.min(1, textOpacity).toString();
                // Description fades in slightly after welcome text
                const descOpacity = Math.max(0, (progress - 0.55) / 0.2);
                descriptionText.style.opacity = Math.min(1, descOpacity).toString();
                descriptionText.style.transform = `translateY(${20 - descOpacity * 20}px)`;
                // Button fades in after description
                const btnOpacity = Math.max(0, (progress - 0.6) / 0.15);
                ctaButton.style.opacity = Math.min(1, btnOpacity).toString();
                ctaButton.style.transform = `translateY(${20 - btnOpacity * 20}px)`;
            }
            // Stage 4: Animasi selesai, tampilan final
            else {
                scrollingLogo.style.opacity = '1';
                scrollingLogo.style.transform = 'scale(0.6)';
                welcomeText.style.opacity = '1';
                descriptionText.style.opacity = '1';
                descriptionText.style.transform = 'translateY(0)';
                ctaButton.style.opacity = '1';
                ctaButton.style.transform = 'translateY(0)';
            }
        });

        // Trigger animasi awal saat load
        window.dispatchEvent(new Event('scroll'));
    }

    // Testimonial Slider - Peek-a-boo with Drag Support
    const slider = document.getElementById('testimonial-slider');
    const slides = document.querySelectorAll('.testimonial-slide');

    if (slider && slides.length > 0) {
        let currentSlide = 0;
        const totalSlides = slides.length;
        let isDragging = false;
        let startX = 0;
        let currentX = 0;

        // Mouse/Touch event handlers for drag
        slider.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.pageX - slider.offsetLeft;
            currentX = startX;
            slider.style.cursor = 'grabbing';
            // Pause autoplay during drag
            if (autoplayInterval) {
                clearInterval(autoplayInterval);
            }
        });

        slider.addEventListener('mouseleave', () => {
            if (isDragging) {
                isDragging = false;
                slider.style.cursor = 'grab';
                // Restart autoplay
                startAutoplay();
            }
        });

        slider.addEventListener('mouseup', (e) => {
            if (!isDragging) return;
            isDragging = false;
            slider.style.cursor = 'grab';

            const dragDistance = currentX - startX;
            const threshold = 50; // Minimum drag distance to trigger slide change

            if (dragDistance > threshold) {
                // Dragged right - go to previous slide
                goToSlide(currentSlide - 1);
            } else if (dragDistance < -threshold) {
                // Dragged left - go to next slide
                goToSlide(currentSlide + 1);
            }

            // Restart autoplay
            startAutoplay();
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            e.preventDefault();
            currentX = e.pageX - slider.offsetLeft;
        });

        // Touch support
        slider.addEventListener('touchstart', (e) => {
            isDragging = true;
            startX = e.touches[0].pageX - slider.offsetLeft;
            currentX = startX;
            if (autoplayInterval) {
                clearInterval(autoplayInterval);
            }
        });

        slider.addEventListener('touchend', (e) => {
            if (!isDragging) return;
            isDragging = false;

            const dragDistance = currentX - startX;
            const threshold = 50;

            if (dragDistance > threshold) {
                goToSlide(currentSlide - 1);
            } else if (dragDistance < -threshold) {
                goToSlide(currentSlide + 1);
            }

            startAutoplay();
        });

        slider.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            currentX = e.touches[0].pageX - slider.offsetLeft;
        });

        function updateSlider() {
            // Use a simple gap based on viewport width for responsiveness
            const isMobile = window.innerWidth < 768;
            const slideWidth = isMobile ? 320 : 384; // w-80 = 320px, w-96 = 384px
            const gap = 16; // 16px gap between slides

            slides.forEach((slide, index) => {
                // Calculate distance from current slide (handles circular navigation)
                let distance = index - currentSlide;

                // Normalize distance for circular navigation
                if (distance > totalSlides / 2) {
                    distance -= totalSlides;
                } else if (distance < -totalSlides / 2) {
                    distance += totalSlides;
                }

                // Reset base classes
                slide.className = 'testimonial-slide absolute top-0 transition-all duration-300 ease-out w-80 md:w-96';

                // Calculate horizontal offset
                const xOffset = distance * (slideWidth + gap);

                if (distance === 0) {
                    // Active slide - fully visible in center
                    slide.classList.add('opacity-100', 'scale-100', 'z-10');
                    slide.style.left = '50%';
                    slide.style.transform = 'translateX(-50%) scale(1)';
                } else if (distance === 1 || distance === -(totalSlides - 1)) {
                    // Next slide (peek-a-boo on right)
                    slide.classList.add('opacity-60', 'scale-90', 'z-0');
                    slide.style.left = '50%';
                    slide.style.transform = `translateX(calc(-50% + ${slideWidth + gap}px)) scale(0.9)`;
                } else if (distance === -1 || distance === (totalSlides - 1)) {
                    // Previous slide (peek-a-boo on left)
                    slide.classList.add('opacity-60', 'scale-90', 'z-0');
                    slide.style.left = '50%';
                    slide.style.transform = `translateX(calc(-50% - ${slideWidth + gap}px)) scale(0.9)`;
                } else {
                    // Far slides - hidden off-screen
                    slide.classList.add('opacity-0', 'scale-75', '-z-10');
                    slide.style.left = '50%';
                    slide.style.transform = `translateX(calc(-50% + ${xOffset}px)) scale(0.75)`;
                }
            });
        }

        function goToSlide(index) {
            currentSlide = (index + totalSlides) % totalSlides;
            updateSlider();
        }

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        // Store interval ID for autoplay
        let autoplayInterval;

        // Function to start/restart autoplay
        function startAutoplay() {
            // Clear existing interval if any
            if (autoplayInterval) {
                clearInterval(autoplayInterval);
            }
            // Start new interval
            autoplayInterval = setInterval(nextSlide, 5000);
        }

        // Handle window resize for responsive updates
        window.addEventListener('resize', updateSlider);

        // Start autoplay
        startAutoplay();

        // Initialize after a small delay to ensure proper layout
        setTimeout(updateSlider, 100);
    }
</script>

{{-- Random Animation Delay for Data Flow Icons --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const icons = document.querySelectorAll('.data-flow-icon');
        const baseDelays = [0, 0.8, 1.6, 2.4, 3.2];

        // Acak urutan delays
        const shuffledDelays = baseDelays.sort(() => Math.random() - 0.5);

        icons.forEach((icon, index) => {
            icon.style.animationDelay = `${shuffledDelays[index]}s`;
        });
    });
</script>
@endsection
