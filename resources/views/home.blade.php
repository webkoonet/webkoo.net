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

{{-- Features Section --}}
<section id="services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Layanan Kami
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Kami menyediakan berbagai solusi digital untuk membantu bisnis Anda berkembang
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-900 rounded-full mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Web Development</h3>
                <p class="text-gray-600">
                    Website modern dengan teknologi terkini dan performa tinggi
                </p>
            </div>

            <div class="text-center p-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-900 rounded-full mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Mobile Apps</h3>
                <p class="text-gray-600">
                    Aplikasi mobile responsif untuk iOS dan Android
                </p>
            </div>

            <div class="text-center p-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-900 rounded-full mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">UI/UX Design</h3>
                <p class="text-gray-600">
                    Desain antarmuka yang intuitif dan menarik untuk pengguna
                </p>
            </div>
        </div>
    </div>
</section>

{{-- About Section --}}
<section id="about" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
                Tentang Webkoo
            </h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-8">
                Webkoo adalah perusahaan teknologi yang berfokus pada pengembangan solusi digital berkualitas tinggi.
                Kami menggabungkan kreativitas dengan teknologi terkini untuk menghasilkan produk yang tidak hanya
                berfungsi dengan baik, tetapi juga memberikan pengalaman pengguna yang luar biasa.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                Dengan tim berpengalaman dan pendekatan yang berorientasi pada hasil, kami siap membantu bisnis Anda
                bertransformasi di era digital.
            </p>
        </div>
    </div>
</section>

{{-- Portfolio Section --}}
<section id="portfolio" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Portfolio
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Beberapa proyek yang telah kami kerjakan dengan dedikasi
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Portfolio Item 1 --}}
            <div class="group relative overflow-hidden rounded-lg bg-gray-100 aspect-[4/3]">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="absolute inset-0 flex items-end p-6">
                    <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <h3 class="text-lg font-semibold mb-1">E-Commerce Platform</h3>
                        <p class="text-sm text-gray-300">Web Development</p>
                    </div>
                </div>
                <div class="absolute inset-0 flex items-center justify-center text-gray-400">
                    <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>

            {{-- Portfolio Item 2 --}}
            <div class="group relative overflow-hidden rounded-lg bg-gray-100 aspect-[4/3]">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="absolute inset-0 flex items-end p-6">
                    <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <h3 class="text-lg font-semibold mb-1">Mobile Banking App</h3>
                        <p class="text-sm text-gray-300">Mobile Development</p>
                    </div>
                </div>
                <div class="absolute inset-0 flex items-center justify-center text-gray-400">
                    <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>

            {{-- Portfolio Item 3 --}}
            <div class="group relative overflow-hidden rounded-lg bg-gray-100 aspect-[4/3]">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="absolute inset-0 flex items-end p-6">
                    <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <h3 class="text-lg font-semibold mb-1">Brand Identity</h3>
                        <p class="text-sm text-gray-300">UI/UX Design</p>
                    </div>
                </div>
                <div class="absolute inset-0 flex items-center justify-center text-gray-400">
                    <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section id="contact" class="py-20 bg-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">
            Hubungi Kami
        </h2>
        <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">
            Siap untuk memulai proyek Anda bersama kami? Hubungi kami dan mari diskusikan solusi terbaik untuk bisnis Anda.
        </p>
        <a href="mailto:info@webkoo.net"
           class="inline-block px-8 py-3 bg-white text-gray-900 font-medium rounded-full shadow-lg hover:shadow-xl transition-shadow">
            info@webkoo.net
        </a>
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
</script>
@endsection
