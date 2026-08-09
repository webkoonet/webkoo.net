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
        <div class="flex flex-col items-center justify-center">
            {{-- Welcome Text --}}
            <p id="welcome-text" class="mb-6 text-3xl sm:text-4xl md:text-5xl font-medium text-gray-900 opacity-0 transition-opacity duration-700">
                Hello welcome to webkoo
            </p>

            {{-- Logo yang akan di-animasikan --}}
            <div id="scrolling-logo" class="transition-all duration-300 ease-out opacity-0 scale-150">
                <img src="{{ asset('storage/assets/img/logo.webp') }}"
                     alt="Webkoo"
                     class="w-32 h-32 object-contain">
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

    if (welcomeSection && scrollingLogo && welcomeText) {
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
            }
            // Stage 2: Logo mengecil lebih lanjut (dari 1.0 ke 0.6) (0.25 - 0.5)
            else if (progress < 0.5) {
                const stageProgress = (progress - 0.25) / 0.25;
                const logoScale = 1.0 - stageProgress * 0.4; // dari 1.0 ke 0.6
                scrollingLogo.style.opacity = '1';
                scrollingLogo.style.transform = `scale(${logoScale})`;
                welcomeText.style.opacity = '0';
            }
            // Stage 3: Teks muncul (0.5 - 0.75)
            else if (progress < 0.75) {
                const textOpacity = (progress - 0.5) / 0.25;
                scrollingLogo.style.opacity = '1';
                scrollingLogo.style.transform = 'scale(0.6)';
                welcomeText.style.opacity = Math.min(1, textOpacity).toString();
            }
            // Stage 4: Animasi selesai, tampilan final
            else {
                scrollingLogo.style.opacity = '1';
                scrollingLogo.style.transform = 'scale(0.6)';
                welcomeText.style.opacity = '1';
            }
        });

        // Trigger animasi awal saat load
        window.dispatchEvent(new Event('scroll'));
    }
</script>
@endsection
