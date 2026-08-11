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
                    <img src="{{ asset('storage/assets/img/website-builder-display.png') }}" alt="Website Builder" class="w-full h-auto object-contain rounded-xl">
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
                    <img src="{{ asset('storage/assets/img/website-wordpress-display.png') }}" alt="WordPress" class="w-full h-auto object-contain rounded-xl">
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
                <div class="flex items-center justify-center p-8">
                    <img src="{{ asset('storage/assets/img/jerry.webp') }}" alt="Jerry - Freelance Developer" class="max-h-[180px] w-full h-auto object-contain rounded-xl grayscale">
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
</script>
@endsection
