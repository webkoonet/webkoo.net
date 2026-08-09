@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<section class="relative min-h-[600px] flex items-center justify-center">
    {{-- Background Image --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('storage/assets/img/bg-hero.webp') }}"
             alt="Hero Background"
             class="w-full h-full object-cover">
    </div>

    {{-- Hero Content --}}
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
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

{{-- Scroll Animation Section --}}
<section id="welcome-section" class="relative" style="height: 350vh;">
    {{-- Sticky Container - tetap di tengah layar saat scroll --}}
    <div class="sticky top-0 flex items-center justify-center h-screen overflow-hidden">
        <div class="flex flex-col items-center justify-between h-full px-4 sm:px-6 md:px-8 py-6 sm:py-8 md:py-12 pt-20 sm:pt-24 md:pt-32">
            {{-- Welcome Text - Top --}}
            <p id="welcome-text" class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-medium text-gray-900 opacity-0 transition-opacity duration-700 text-center px-4">
                {{ __('messages.welcome_text') }}
            </p>

            {{-- Logo - Middle --}}
            <div id="scrolling-logo" class="relative transition-all duration-300 ease-out opacity-0 scale-150">
                <div class="w-24 h-24 sm:w-28 sm:h-28 md:w-32 md:h-32 bg-gray-200/50 backdrop-blur-md border border-gray-300/60 rounded-3xl flex items-center justify-center shadow-lg">
                    {{-- Mata --}}
                    <div class="absolute w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 flex justify-between items-start pt-4 sm:pt-5 md:pt-6">
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
                <p id="description-text" class="mb-3 sm:mb-4 text-xs sm:text-sm md:text-base text-gray-600 opacity-0 transition-all duration-700 text-center max-w-[200px] sm:max-w-xs md:max-w-xs leading-relaxed">
                    {!! __('messages.description_text') !!}
                </p>

                <a id="cta-button" href="#services"
                   class="px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 bg-white text-gray-900 text-xs sm:text-sm font-medium rounded-full opacity-0 transition-all duration-700 hover:bg-gray-100 hover:scale-105 shadow-md">
                    {{ __('messages.explore_services') }}
                </a>
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

    if (welcomeSection && scrollingLogo && welcomeText && descriptionText && ctaButton) {
        window.addEventListener('scroll', function() {
            const rect = welcomeSection.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            // Hitung progress berdasarkan seberapa jauh section sudah discroll
            // Section height 250vh, sticky container h-screen
            // Progress = 0 saat section top = 0, progress = 1 saat section selesai
            const scrolledDistance = -rect.top;
            const totalScrollDistance = rect.height - windowHeight;

            let progress = scrolledDistance / totalScrollDistance;
            progress = Math.max(0, Math.min(1, progress));

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
