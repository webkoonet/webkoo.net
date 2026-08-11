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
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-3 whitespace-nowrap">
                {{ __('messages.make_website') }} <span id="rotating-text" class="inline-block transition-all duration-500 min-h-[1.2em] font-light">{{ __('messages.business') }}</span>
            </h1>
            <p class="text-base sm:text-lg text-gray-500 mb-10 max-w-2xl mx-auto">
                {{ __('messages.hero_description') }}
            </p>

            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#contact"
                   class="px-8 py-3 bg-gradient-to-r from-[#323232] to-[#000000] text-white font-medium rounded-full hover:opacity-90 transition-opacity shadow-lg">
                    {{ __('messages.build_website') }}
                </a>
                <a href="#portfolio"
                   class="px-8 py-3 bg-white text-gray-900 font-medium rounded-full shadow-lg hover:shadow-xl transition-shadow">
                    {{ __('messages.view_demo') }}
                </a>
            </div>
        </div>
    </section>

    {{-- Trusted By / Clients Section --}}
    <section class="relative z-10 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <p class="text-center text-sm text-gray-600 font-medium tracking-wide uppercase">
                {{ __('messages.trusted_by') }}
            </p>
        </div>

        {{-- Static Logo Grid --}}
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Row 1: 5 logos --}}
            <div class="flex items-center justify-center gap-6 sm:gap-10 lg:gap-14 -mb-8">
                {{-- Client 1 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('storage/assets/img/client-1.webp') }}"
                         alt="Client Logo"
                         class="h-24 max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 2 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('storage/assets/img/client-2.webp') }}"
                         alt="Client Logo"
                         class="h-24 max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 3 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('storage/assets/img/client-3.webp') }}"
                         alt="Client Logo"
                         class="h-24 max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 4 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('storage/assets/img/client-4.webp') }}"
                         alt="Client Logo"
                         class="h-24 max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 5 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('storage/assets/img/client-5.webp') }}"
                         alt="Client Logo"
                         class="h-24 max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
            </div>

            {{-- Row 2: 3 logos (centered) --}}
            <div class="flex items-center justify-center gap-6 sm:gap-10 lg:gap-14">
                {{-- Client 6 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('storage/assets/img/client-6.webp') }}"
                         alt="Client Logo"
                         class="h-24 max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 7 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('storage/assets/img/client-7.png') }}"
                         alt="Client Logo"
                         class="h-24 max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
                </div>
                {{-- Client 8 --}}
                <div class="opacity-60 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('storage/assets/img/client-8.png') }}"
                         alt="Client Logo"
                         class="h-24 max-w-32 w-auto object-contain grayscale hover:grayscale-0 transition-all">
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
            <p id="welcome-text" class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-medium text-white opacity-0 transition-opacity duration-700 text-center px-4">
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
                <p id="description-text" class="mb-3 sm:mb-4 text-xs sm:text-sm md:text-base text-white opacity-0 transition-all duration-700 text-center max-w-[200px] sm:max-w-xs md:max-w-xs leading-relaxed">
                    {!! __('messages.description_text') !!}
                </p>

                <a id="cta-button" href="#services"
                   class="px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 bg-white text-gray-900 text-xs sm:text-sm font-medium rounded-full opacity-0 transition-all duration-700 hover:bg-white/90 hover:scale-105 shadow-lg">
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
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-medium text-white">
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
                    <h3 class="text-xl font-bold text-white mb-3">Website Builder</h3>
                    {{-- Description --}}
                    <p class="text-white/80 mb-6 leading-relaxed">
                        Fast, affordable websites using modern drag-and-drop builders. Perfect for small businesses and startups.
                    </p>
                    {{-- Features List --}}
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-white/80">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Quick deployment (3-5 days)
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/80">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Easy to manage
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/80">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Budget-friendly
                        </li>
                    </ul>
                    {{-- CTA --}}
                    <a href="#webkoo-builder" class="inline-flex items-center gap-2 text-purple-400 font-semibold hover:text-purple-300 group-hover:gap-3 transition-all">
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
                    <h3 class="text-xl font-bold text-white mb-3">WordPress</h3>
                    {{-- Description --}}
                    <p class="text-white/80 mb-6 leading-relaxed">
                        Flexible and scalable CMS solution. Ideal for blogs, content sites, and growing businesses.
                    </p>
                    {{-- Features List --}}
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-white/80">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Custom theme development
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/80">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Plugin integration
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/80">
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
                        <span class="text-base font-semibold text-white">Jerry</span>
                        <span class="text-white/50 mx-1">—</span>
                        <span class="text-sm text-white/70">Web Developer</span>
                    </div>
                </div>
                <div class="p-8">
                    {{-- Title --}}
                    <h3 class="text-xl font-bold text-white mb-3">Custom Development</h3>
                    {{-- Description --}}
                    <p class="text-white/80 mb-6 leading-relaxed">
                        Fully custom web applications built from scratch. For unique requirements and enterprise solutions.
                    </p>
                    {{-- Features List --}}
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-white/80">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Tailored architecture
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/80">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Scalable & secure
                        </li>
                        <li class="flex items-center gap-2 text-sm text-white/80">
                            <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Full ownership
                        </li>
                    </ul>
                    {{-- CTA --}}
                    <a href="#custom" class="inline-flex items-center gap-2 text-green-400 font-semibold hover:text-green-300 group-hover:gap-3 transition-all">
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">{{ __('messages.trusted_by') }}</h2>
            <p class="text-lg text-gray-600">{{ __('messages.testimonial_subtitle') }}</p>
        </div>

        {{-- Peek-a-boo Testimonial Slider --}}
        <div class="relative">
            {{-- Slider Container --}}
            <div id="testimonial-slider" class="relative w-full h-96 lg:h-[28rem]">
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
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white font-bold text-lg">
                                    {{ substr($testimonial['name'], 0, 1) }}
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">{{ $testimonial['name'] }}</h4>
                                    <p class="text-sm text-gray-600">{{ $testimonial['role'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Navigation Arrows --}}
            <button id="prev-btn" class="absolute left-0 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white border border-gray-200 shadow-lg flex items-center justify-center text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-colors z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button id="next-btn" class="absolute right-0 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white border border-gray-200 shadow-lg flex items-center justify-center text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-colors z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
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

    // Testimonial Slider - Peek-a-boo
    const slider = document.getElementById('testimonial-slider');
    const slides = document.querySelectorAll('.testimonial-slide');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');

    if (slider && slides.length > 0) {
        let currentSlide = 0;
        const totalSlides = slides.length;

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

        function prevSlide() {
            goToSlide(currentSlide - 1);
        }

        // Event listeners for navigation buttons
        if (nextBtn) {
            nextBtn.addEventListener('click', nextSlide);
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', prevSlide);
        }

        // Handle window resize for responsive updates
        window.addEventListener('resize', updateSlider);

        // Auto-advance every 5 seconds
        setInterval(nextSlide, 5000);

        // Initialize after a small delay to ensure proper layout
        setTimeout(updateSlider, 100);
    }
</script>
@endsection
