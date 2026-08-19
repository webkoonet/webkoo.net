@extends('layouts.app')

@section('title', __('messages.pricing'))

@section('content')
<style>
    /* Pricing Card Animation */
    @keyframes float-gentle {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-8px); }
    }
    @keyframes pulse-soft {
        0%, 100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.4); }
        50% { box-shadow: 0 0 20px 5px rgba(34, 197, 94, 0.2); }
    }
    @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }

    .pricing-float { animation: float-gentle 4s ease-in-out infinite; }
    .pricing-pulse { animation: pulse-soft 3s ease-in-out infinite; }
    .shimmer-text {
        background: linear-gradient(90deg, #1a1a1a 0%, #4a4a4a 50%, #1a1a1a 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: shimmer 3s linear infinite;
    }
    .shimmer-text-white {
        background: linear-gradient(90deg, #ffffff 0%, #e0e0e0 50%, #ffffff 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: shimmer 3s linear infinite;
    }
</style>

{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5"/>
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid)"/>
        </svg>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-28 md:py-32">
        <div class="text-center pb-16 sm:pb-20">
            {{-- Main Question --}}
            <h1 class="text-2xl sm:text-3xl md:text-lg lg:text-lg font-medium text-white mb-6 leading-tight" style="margin-bottom: 24px;">
                Apakah benar dengan <span class="text-blue-400 shimmer-text-white">Rp 0</span> dapat memilki website?
            </h1>

            {{-- Answer --}}
            <p class="text-3xl sm:text-4xl md:text-4xl lg:text-4xl font-bold text-white" style="margin-bottom: 46px;">
                Ya, benar. Tanpa biaya tersembunyi.
            </p>

            {{-- Features Box - Rounded dengan 4 poin dalam kartu terpisah --}}
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    {{-- Feature 1 --}}
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-5 flex items-center gap-3 hover:bg-white/15 transition-colors min-h-[80px]">
                        <div class="w-10 h-10 bg-blue-500/20 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-white font-medium">Gratis domain</span>
                    </div>

                    {{-- Feature 2 --}}
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-5 flex items-center gap-3 hover:bg-white/15 transition-colors min-h-[80px]">
                        <div class="w-10 h-10 bg-blue-500/20 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-white font-medium">SEO google search</span>
                    </div>

                    {{-- Feature 3 --}}
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-5 flex items-center gap-3 hover:bg-white/15 transition-colors min-h-[80px]">
                        <div class="w-10 h-10 bg-blue-500/20 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-white font-medium">Desain responsive</span>
                    </div>

                    {{-- Feature 4 --}}
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-5 flex items-center gap-3 hover:bg-white/15 transition-colors min-h-[80px]">
                        <div class="w-10 h-10 bg-blue-500/20 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-white font-medium">Bantuan 24 Jam</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Decorative Elements - Shape Divider --}}
    <div class="absolute bottom-0 left-0 right-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 27.8" preserveAspectRatio="none" class="w-full h-auto">
            <path fill="#f9fafb" d="M265.8 3.5c-10.9 0-15.9 6.2-15.9 6.2s-3.6-3.5-9.2-.9c-9.1 4.1-4.4 13.4-4.4 13.4s-1.2.2-1.9.9c-.6.7-.5 1.9-.5 1.9s-1-.5-2.3-.2c-1.3.3-1.6 1.4-1.6 1.4s.4-3.4-1.5-5c-3.9-3.4-8.3-.2-8.3-.2s-.6-.7-.9-.9c-.4-.2-1.2-.2-1.2-.2s-4.4-3.6-11.5-2.6-10.4 7.9-10.4 7.9-.5-3.3-3.9-4.9c-4.8-2.4-7.4 0-7.4 0s2.4-4.1-1.9-6.4-6.2 1.2-6.2 1.2-.9-.5-2.1-.5-2.3 1.1-2.3 1.1.1-.7-1.1-1.1c-1.2-.4-2 0-2 0s3.6-6.8-3.5-8.9c-6-1.8-7.9 2.6-8.4 4-.1-.3-.4-.7-.9-1.1-1-.7-1.3-.5-1.3-.5s1-4-1.7-5.2c-2.7-1.2-4.2 1.1-4.2 1.1s-3.1-1-5.7 1.4-2.1 5.5-2.1 5.5-.9 0-2.1.7-1.4 1.7-1.4 1.7-1.7-1.2-4.3-1.2c-2.6 0-4.5 1.2-4.5 1.2s-.7-1.5-2.8-2.4c-2.1-.9-4 0-4 0s2.6-5.9-4.7-9c-7.3-3.1-12.6 3.3-12.6 3.3s-.9 0-1.9.2c-.9.2-1.5.9-1.5.9S99.4 3 94.9 3.9c-4.5.9-5.7 5.7-5.7 5.7s-2.8-5-12.3-3.9-11.1 6-11.1 6-1.2-1.4-4-.7c-.8.2-1.3.5-1.8.9-.9-2.1-2.7-4.9-6.2-4.4-3.2.4-4 2.2-4 2.2s-.5-.7-1.2-.7h-1.4s-.5-.9-1.7-1.4-2.4 0-2.4 0-2.4-1.2-4.7 0-3.1 4.1-3.1 4.1-1.7-1.4-3.6-.7c-1.9.7-1.9 2.8-1.9 2.8s-.5-.5-1.7-.2c-1.2.2-1.4.7-1.4.7s-.7-2.3-2.8-2.8c-2.1-.5-4.3.2-4.3.2s-1.7-5-11.1-6c-3.8-.4-6.6.2-8.5 1v21.2h283.5V11.1c-.9.2-1.6.4-1.6.4s-5.2-8-16.1-8z"></path>
        </svg>
    </div>
</section>

{{-- Pricing Cards Section --}}
<section class="py-16 sm:py-20 md:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center mb-12 sm:mb-16">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4">Pilih Paket Website Anda</h2>
            <p class="text-gray-600 max-w-xl mx-auto">Semua paket sudah termasuk domain gratis, SEO optimization, dan support 24/7</p>
        </div>

        {{-- Pricing Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto items-start">
            {{-- Basic Plan --}}
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="p-8">
                    {{-- Plan Name --}}
                    <div class="flex items-center justify-center gap-2 mb-6">
                        <img src="{{ asset('storage/assets/img/logo.webp') }}"
                             alt="Webkoo"
                             class="h-8 w-auto">
                        <div class="h-4 w-0.5 bg-gray-400"></div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Site Builder</h3>
                        </div>
                    </div>

                    {{-- Price --}}
                    <div class="text-center mb-6">
                        <div class="flex items-baseline justify-center gap-1">
                            <span class="text-5xl font-bold text-gray-900">Rp 0</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Gratis selamanya</p>
                    </div>

                    {{-- CTA Button --}}
                    <a href="https://wa.me/6281234567890?text=Halo%20Webkoo,%20saya%20tertarik%20dengan%20paket%20Basic"
                       target="_blank"
                       class="block w-full py-3 px-6 bg-gray-900 hover:bg-gray-800 text-white font-semibold rounded-xl transition-colors text-center mb-6">
                        Pesan Sekarang
                    </a>

                    {{-- Features --}}
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">SEO Google Search</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Desain Responsive</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Unlimited Halaman</span>
                        </div>
                        <div class="flex items-center gap-3 relative">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Toko Online (Maks. 5 Produk)</span>
                            <div class="tooltip-container relative inline-block">
                                <svg class="w-4 h-4 text-amber-500 cursor-pointer" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 2l1.5 2h2l1.5-2 1 1.5 2 0.5 1 1.5L17 7v2l1 2-1 2-1.5 1-0.5 2-1 1.5-1.5 2-2-0.5-2.5 0.5v-2H8v2l-2.5-0.5-2 0.5-1.5-2-1-1.5-0.5-2-1.5-1 1-2-1-2V7l-0.5-2.5 1-1.5 2-0.5 1-1.5L5 2h2l1.5 2H10zm-1 16v-2h2v2H9z"/>
                                </svg>
                                <div class="tooltip absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-3 py-1.5 bg-gray-900 text-white text-xs rounded-lg whitespace-nowrap opacity-0 invisible transition-all duration-200 pointer-events-none z-10">
                                    bisa di upgrade
                                    <div class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-gray-900"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">SSL Gratis</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Support Tiket</span>
                        </div>

                        {{-- Premium Features Toggle --}}
                        <button class="premium-toggle w-full flex items-center justify-center gap-2 text-sm text-blue-600 hover:text-blue-700 font-medium py-2 transition-colors cursor-pointer">
                            <span>Lihat Paket Premium</span>
                            <svg class="premium-icon w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        {{-- Premium Features Dropdown --}}
                        <div class="premium-features hidden space-y-3 pt-3 border-t border-gray-100">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Unlimited Jumlah Produk di Toko Online</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Support Meta Tag Pixel</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Custom Script Header & Footer</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Custom Nama Domain</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Livechat System</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Support Private WhatsApp</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Custom Plan (Middle - Popular) --}}
            <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-300 overflow-hidden pricing-float border-2 border-blue-500">
                {{-- Popular Badge --}}
                <div class="absolute top-0 right-0 bg-blue-500/20 text-white text-xs font-bold px-4 py-2 rounded-bl-2xl">
                    POPULER
                </div>
                <div class="p-8">
                    {{-- Plan Name --}}
                    <div class="flex items-center justify-center gap-2 mb-6">
                        <img src="{{ asset('storage/assets/img/logo.webp') }}"
                             alt="Webkoo"
                             class="h-8 w-auto">
                        <div class="h-4 w-0.5 bg-gray-500"></div>
                        <div>
                            <h3 class="text-lg font-bold text-white">Custom</h3>
                        </div>
                    </div>

                    {{-- Price --}}
                    <div class="text-center mb-6">
                        <div class="flex items-baseline justify-center gap-1">
                            <span class="text-4xl font-bold text-blue-400 shimmer-text-white">Hubungi Kami</span>
                        </div>
                        <p class="text-sm text-gray-400 mt-2">Harga sesuai kebutuhan Anda</p>
                    </div>

                    {{-- CTA Button --}}
                    <a href="https://wa.me/6281234567890?text=Halo%20Webkoo,%20saya%20tertarik%20dengan%20paket%20Custom"
                       target="_blank"
                       class="block w-full py-3 px-6 bg-blue-500/20 hover:bg-blue-600 text-white font-semibold rounded-xl transition-colors text-center mb-6 pricing-pulse">
                        Pesan Sekarang
                    </a>

                    {{-- Features --}}
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-200">Fitur Apapun Sesuai Keinginan</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-200">Dibuat Oleh Freelancer Profesional</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-200">Desain 100% Custom & Unik</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-200">Unlimited Revisions</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-200">Full Source Code & Ownership</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-200">Custom API Integration</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-200">Free Konsultasi & Perencanaan</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-200">Support Private WhatsApp</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- WordPress Plan --}}
            <div class="bg-white rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                <div class="p-8">
                    {{-- Plan Name --}}
                    <div class="flex items-center justify-center gap-2 mb-6">
                        <img src="{{ asset('storage/assets/img/logo.webp') }}"
                             alt="Webkoo"
                             class="h-8 w-auto">
                        <div class="h-4 w-0.5 bg-gray-400"></div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">WordPress</h3>
                        </div>
                    </div>

                    {{-- Price --}}
                    <div class="text-center mb-6">
                        <div class="flex items-baseline justify-center gap-1">
                            <span class="text-gray-400 line-through text-lg">Rp989K</span>
                            <span class="text-5xl font-bold text-gray-900">Rp789K</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Pertama • perpanjangan Rp489K/thn</p>
                    </div>

                    {{-- CTA Button --}}
                    <a href="https://wa.me/6281234567890?text=Halo%20Webkoo,%20saya%20tertarik%20dengan%20paket%20WordPress"
                       target="_blank"
                       class="block w-full py-3 px-6 bg-gray-900 hover:bg-gray-800 text-white font-semibold rounded-xl transition-colors text-center mb-6">
                        Pesan Sekarang
                    </a>

                    {{-- Features --}}
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Tanpa Batas Halaman</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Blog / Artikel System</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Live Chat System</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Multi Language Support</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Responsive Mobile Friendly</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">SEO Optimization</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">E-Commerce Ready</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-700">Contact Form</span>
                        </div>

                        {{-- WordPress Features Toggle --}}
                        <button class="wordpress-features-toggle w-full flex items-center justify-center gap-2 text-sm text-blue-600 hover:text-blue-700 font-medium py-2 transition-colors cursor-pointer">
                            <span>Lihat Fitur Lengkapnya</span>
                            <svg class="wordpress-features-icon w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        {{-- WordPress Features Dropdown --}}
                        <div class="wordpress-features hidden space-y-3 pt-3 border-t border-gray-100">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Google Analytics Integration</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Social Media Integration</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Backup Harian</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Security Protection</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Caching System</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700">Image Optimization</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 {{-- Features Highlight Section --}}
<section class="py-16 sm:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4">Semua Paket Termasuk</h2>
            <p class="text-gray-600 max-w-xl mx-auto">Fitur standar yang Anda dapatkan di setiap paket website</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Feature 1: Gratis Domain --}}
            <div class="text-center p-6 rounded-2xl bg-gray-50 hover:bg-blue-50 transition-colors">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Gratis Domain</h3>
                <p class="text-sm text-gray-600">Domain .com gratis selama 1 tahun</p>
            </div>

            {{-- Feature 2: SEO Google --}}
            <div class="text-center p-6 rounded-2xl bg-gray-50 hover:bg-blue-50 transition-colors">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">SEO Google Search</h3>
                <p class="text-sm text-gray-600">Optimasi untuk ranking Google</p>
            </div>

            {{-- Feature 3: Responsive --}}
            <div class="text-center p-6 rounded-2xl bg-gray-50 hover:bg-blue-50 transition-colors">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Desain Responsive</h3>
                <p class="text-sm text-gray-600">Tampil sempurna di semua device</p>
            </div>

            {{-- Feature 4: 24/7 Support --}}
            <div class="text-center p-6 rounded-2xl bg-gray-50 hover:bg-blue-50 transition-colors">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Bantuan 24 Jam</h3>
                <p class="text-sm text-gray-600">Support via WhatsApp setiap saat</p>
            </div>
        </div>
    </div>
</section>

 {{-- FAQ Section --}}
<section class="py-16 sm:py-20 bg-gray-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 mb-4">Pertanyaan yang Sering Diajukan</h2>
            <p class="text-gray-600">Jawaban untuk pertanyaan umum seputar layanan kami</p>
        </div>

        <div class="space-y-4" id="faq-accordion">
            {{-- FAQ Item 1 --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-100">
                <button class="faq-toggle w-full px-6 py-4 text-left flex items-center justify-between">
                    <span class="font-semibold text-gray-900">Apakah ada biaya tersembunyi?</span>
                    <svg class="faq-icon w-5 h-5 text-gray-500 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content hidden px-6 pb-4">
                    <p class="text-gray-600">Tidak ada biaya tersembunyi. Harga yang tertera adalah harga final yang sudah termasuk domain, hosting, dan semua fitur yang tercantum.</p>
                </div>
            </div>

            {{-- FAQ Item 2 --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-100">
                <button class="faq-toggle w-full px-6 py-4 text-left flex items-center justify-between">
                    <span class="font-semibold text-gray-900">Berapa lama proses pembuatan website?</span>
                    <svg class="faq-icon w-5 h-5 text-gray-500 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content hidden px-6 pb-4">
                    <p class="text-gray-600">Untuk paket Basic dan Professional, proses pembuatan memakan waktu 3-5 hari kerja. Untuk paket Enterprise, tergantung kompleksitas project.</p>
                </div>
            </div>

            {{-- FAQ Item 3 --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-100">
                <button class="faq-toggle w-full px-6 py-4 text-left flex items-center justify-between">
                    <span class="font-semibold text-gray-900">Apakah bisa request desain custom?</span>
                    <svg class="faq-icon w-5 h-5 text-gray-500 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content hidden px-6 pb-4">
                    <p class="text-gray-600">Tentu! Untuk paket Professional dan Enterprise, Anda bisa request desain custom sesuai brand identity bisnis Anda.</p>
                </div>
            </div>

            {{-- FAQ Item 4 --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-100">
                <button class="faq-toggle w-full px-6 py-4 text-left flex items-center justify-between">
                    <span class="font-semibold text-gray-900">Bagaimana cara pembayarannya?</span>
                    <svg class="faq-icon w-5 h-5 text-gray-500 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content hidden px-6 pb-4">
                    <p class="text-gray-600">Kami menerima pembayaran melalui transfer bank (BCA, Mandiri), e-wallet (GoPay, OVO), dan QRIS.</p>
                </div>
            </div>
        </div>
    </div>
</section>

 {{-- CTA Section --}}
<section class="py-16 sm:py-20 bg-gradient-to-r from-gray-900 to-gray-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4">Siap Membuat Website Anda?</h2>
        <p class="text-gray-300 mb-8 max-w-xl mx-auto">Hubungi kami sekarang dan dapatkan website profesional dengan harga terjangkau.</p>
        <a href="https://wa.me/6281234567890?text=Halo%20Webkoo,%20saya%20ingin%20buat%20website"
           target="_blank"
           class="inline-flex items-center gap-3 px-8 py-4 bg-blue-500/20 hover:bg-blue-600 text-white font-bold rounded-2xl transition-all hover:scale-105 shadow-xl">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            <span>Hubungi via WhatsApp</span>
        </a>
    </div>
</section>

{{-- FAQ Script --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion
    const faqToggles = document.querySelectorAll('.faq-toggle');

    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('.faq-icon');

            // Close all other FAQs
            faqToggles.forEach(otherToggle => {
                if (otherToggle !== toggle) {
                    otherToggle.nextElementSibling.classList.add('hidden');
                    otherToggle.querySelector('.faq-icon').classList.remove('rotate-180');
                }
            });

            // Toggle current FAQ
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });

    // Premium Features Toggle
    const premiumToggle = document.querySelector('.premium-toggle');
    const premiumFeatures = document.querySelector('.premium-features');
    const premiumIcon = document.querySelector('.premium-icon');

    if (premiumToggle && premiumFeatures && premiumIcon) {
        premiumToggle.addEventListener('click', function() {
            premiumFeatures.classList.toggle('hidden');
            premiumIcon.classList.toggle('rotate-180');

            // Update text based on state
            const toggleText = this.querySelector('span');
            if (premiumFeatures.classList.contains('hidden')) {
                toggleText.textContent = 'Lihat Paket Premium';
            } else {
                toggleText.textContent = 'Tutup Paket Premium';
            }
        });
    }

    // WordPress Features Toggle
    const wordpressToggle = document.querySelector('.wordpress-features-toggle');
    const wordpressFeatures = document.querySelector('.wordpress-features');
    const wordpressIcon = document.querySelector('.wordpress-features-icon');

    if (wordpressToggle && wordpressFeatures && wordpressIcon) {
        wordpressToggle.addEventListener('click', function() {
            wordpressFeatures.classList.toggle('hidden');
            wordpressIcon.classList.toggle('rotate-180');

            // Update text based on state
            const toggleText = this.querySelector('span');
            if (wordpressFeatures.classList.contains('hidden')) {
                toggleText.textContent = 'Lihat Fitur Lengkapnya';
            } else {
                toggleText.textContent = 'Tutup Fitur Lengkapnya';
            }
        });
    }

    // Tooltip functionality for mobile click
    const tooltipContainers = document.querySelectorAll('.tooltip-container');

    tooltipContainers.forEach(container => {
        const crown = container.querySelector('svg');
        const tooltip = container.querySelector('.tooltip');

        crown.addEventListener('click', function(e) {
            e.stopPropagation();
            // Close all other tooltips
            tooltipContainers.forEach(otherContainer => {
                if (otherContainer !== container) {
                    otherContainer.querySelector('.tooltip').classList.add('opacity-0', 'invisible');
                    otherContainer.querySelector('.tooltip').classList.remove('opacity-100', 'visible');
                }
            });

            // Toggle current tooltip
            tooltip.classList.toggle('opacity-0');
            tooltip.classList.toggle('invisible');
            tooltip.classList.toggle('opacity-100');
            tooltip.classList.toggle('visible');
        });
    });

    // Close tooltips when clicking outside
    document.addEventListener('click', function() {
        tooltipContainers.forEach(container => {
            const tooltip = container.querySelector('.tooltip');
            tooltip.classList.add('opacity-0', 'invisible');
            tooltip.classList.remove('opacity-100', 'visible');
        });
    });

    // Close tooltips when pressing Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            tooltipContainers.forEach(container => {
                const tooltip = container.querySelector('.tooltip');
                tooltip.classList.add('opacity-0', 'invisible');
                tooltip.classList.remove('opacity-100', 'visible');
            });
        }
    });
});
</script>
@endsection
