{{-- Header / Navbar - Megamenu Navigation --}}
<header class="bg-white/80 backdrop-blur-xl border-b border-gray-200/50 sticky top-0 z-50">
    <div class="w-full">
        <div class="flex items-center justify-between h-20 px-6 lg:px-8">

            {{-- Left Side: Logo + Megamenu --}}
            <div class="flex items-center gap-8">
                @php
                    $currentLocale = app()->getLocale();
                    $isIndonesian = $currentLocale === 'id';
                    $requestUri = request()->getRequestUri();
                    $queryString = request()->getQueryString();
                    $queryParams = $queryString ? '?' . $queryString : '';

                    // Get path without locale prefix
                    $path = request()->path();
                    if (str_starts_with($path, 'id/')) {
                        $pathWithoutLocale = substr($path, 3);
                    } elseif ($path === 'id') {
                        $pathWithoutLocale = '';
                    } else {
                        $pathWithoutLocale = $path;
                    }
                @endphp

                {{-- Logo --}}
                <a href="{{ $isIndonesian ? '/id' : '/' }}" class="flex items-center gap-2.5">
                    <img src="{{ asset('storage/assets/img/logo.webp') }}"
                         alt="Webkoo"
                         class="h-9 w-auto">
                    <span class="text-lg font-medium text-gray-900">
                        Webkoo
                    </span>
                </a>

                {{-- Megamenu Navigation (Desktop) --}}
                <div class="hidden lg:flex items-center gap-6">
                    {{-- Pricing Megamenu --}}
                    <div class="megamenu-container relative group">
                        <button type="button"
                                class="megamenu-trigger flex items-center gap-1 text-sm font-normal text-gray-600 hover:text-gray-900 transition-colors">
                            <span>{{ __('messages.pricing') }}</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="megamenu-content absolute top-full left-0 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <div class="bg-white border border-gray-200 rounded-2xl shadow-xl p-6 w-[680px]">
                                {{-- Header --}}
                                <div class="mb-4 pb-3 border-b border-gray-100">
                                    <h3 class="text-sm font-semibold text-gray-900">{{ __('messages.pricing_plans') }}</h3>
                                </div>

                                {{-- Pricing Cards Grid --}}
                                <div class="grid grid-cols-3 gap-4">
                                    {{-- Webkoo Builder --}}
                                    <a href="#webkoo-builder" class="group block">
                                        <div class="bg-gray-50 hover:bg-gray-100 rounded-xl p-4 transition-all duration-200">
                                            <div class="flex items-start justify-between mb-2">
                                                <h4 class="font-semibold text-gray-900 text-sm">{{ __('messages.webkoo_builder') }}</h4>
                                                <span class="px-2 py-0.5 bg-gradient-to-r from-purple-500 to-purple-600 text-white text-[10px] font-medium rounded-full">{{ __('messages.popular') }}</span>
                                            </div>
                                            <p class="text-xs text-gray-600 leading-relaxed">{{ __('messages.webkoo_builder_desc') }}</p>
                                        </div>
                                    </a>

                                    {{-- WordPress --}}
                                    <a href="#wordpress" class="group block">
                                        <div class="bg-gray-50 hover:bg-gray-100 rounded-xl p-4 transition-all duration-200">
                                            <h4 class="font-semibold text-gray-900 text-sm mb-2">{{ __('messages.wordpress') }}</h4>
                                            <p class="text-xs text-gray-600 leading-relaxed">{{ __('messages.wordpress_desc') }}</p>
                                        </div>
                                    </a>

                                    {{-- Custom --}}
                                    <a href="#custom" class="group block">
                                        <div class="bg-gray-50 hover:bg-gray-100 rounded-xl p-4 transition-all duration-200">
                                            <div class="flex items-start justify-between mb-2">
                                                <h4 class="font-semibold text-gray-900 text-sm">{{ __('messages.custom_build') }}</h4>
                                                <span class="px-2 py-0.5 bg-gradient-to-r from-green-500 to-green-600 text-white text-[10px] font-medium rounded-full">{{ __('messages.new') }}</span>
                                            </div>
                                            <p class="text-xs text-gray-600 leading-relaxed">{{ __('messages.custom_build_desc') }}</p>
                                        </div>
                                    </a>
                                </div>

                                {{-- CTA Section --}}
                                <div class="mt-4 pt-3 border-t border-gray-100">
                                    <a href="#contact" class="text-sm text-gray-900 hover:text-gray-700 font-medium flex items-center gap-1">
                                        {{ __('messages.need_custom_pricing') }} →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Products Megamenu --}}
                    <div class="megamenu-container relative group">
                        <button type="button"
                                class="megamenu-trigger flex items-center gap-1 text-sm font-normal text-gray-600 hover:text-gray-900 transition-colors">
                            <span>{{ __('messages.products') }}</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="megamenu-content absolute top-full left-0 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <div class="bg-white border border-gray-200 rounded-2xl shadow-xl p-6 w-[500px]">
                                <div class="grid grid-cols-2 gap-6">
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-3">{{ __('messages.web_services') }}</h3>
                                        <ul class="space-y-2">
                                            <li><a href="#websites" class="text-sm text-gray-600 hover:text-gray-900">{{ __('messages.websites') }}</a></li>
                                            <li><a href="#web-apps" class="text-sm text-gray-600 hover:text-gray-900">{{ __('messages.web_apps') }}</a></li>
                                            <li><a href="#ecommerce" class="text-sm text-gray-600 hover:text-gray-900">{{ __('messages.ecommerce') }}</a></li>
                                            <li><a href="#landing-pages" class="text-sm text-gray-600 hover:text-gray-900">{{ __('messages.landing_pages') }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <p class="text-sm text-gray-700 font-medium mb-2">{{ __('messages.custom_web_project') }}</p>
                                        <a href="#contact" class="text-sm text-gray-900 hover:underline">{{ __('messages.consultation') }} →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Resources Megamenu --}}
                    <div class="megamenu-container relative group">
                        <button type="button"
                                class="megamenu-trigger flex items-center gap-1 text-sm font-normal text-gray-600 hover:text-gray-900 transition-colors">
                            <span>{{ __('messages.resources') }}</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="megamenu-content absolute top-full left-0 pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <div class="bg-white border border-gray-200 rounded-2xl shadow-xl p-6 w-[500px]">
                                <div class="grid grid-cols-2 gap-6">
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-3">{{ __('messages.learn') }}</h3>
                                        <ul class="space-y-2">
                                            <li><a href="#blog" class="text-sm text-gray-600 hover:text-gray-900">{{ __('messages.blog') }}</a></li>
                                            <li><a href="#tutorials" class="text-sm text-gray-600 hover:text-gray-900">{{ __('messages.tutorials') }}</a></li>
                                            <li><a href="#documentation" class="text-sm text-gray-600 hover:text-gray-900">{{ __('messages.documentation') }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <p class="text-sm text-gray-700 font-medium mb-2">{{ __('messages.need_help') }}</p>
                                        <a href="#contact" class="text-sm text-gray-900 hover:underline">{{ __('messages.contact_us') }} →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Side: Language Switcher Only --}}
            <div class="flex items-center gap-1 shrink-0">
                {{-- English --}}
                <a href="{{ '/' . ltrim($pathWithoutLocale, '/') . $queryParams }}"
                   class="px-2.5 py-1.5 text-sm font-normal rounded-md transition-colors {{ !$isIndonesian ? 'text-gray-900 bg-gray-100' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50' }}">
                    EN
                </a>
                {{-- Indonesian --}}
                <a href="{{ '/id' . ($pathWithoutLocale ? '/' . ltrim($pathWithoutLocale, '/') : '') . $queryParams }}"
                   class="px-2.5 py-1.5 text-sm font-normal rounded-md transition-colors {{ $isIndonesian ? 'text-gray-900 bg-gray-100' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50' }}">
                    ID
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <button type="button"
                    id="mobile-menu-button"
                    class="lg:hidden ml-4 p-2 -mr-2 text-gray-700 hover:text-gray-900 transition-colors"
                    aria-expanded="false">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                    <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-200">
            <div class="px-6 py-4 space-y-4">
                {{-- Menu Items --}}
                <a href="#pricing" class="block text-base text-gray-600 hover:text-gray-900 transition-colors">
                    {{ __('messages.pricing') }}
                </a>
                <a href="#products" class="block text-base text-gray-600 hover:text-gray-900 transition-colors">
                    {{ __('messages.products') }}
                </a>
                <a href="#resources" class="block text-base text-gray-600 hover:text-gray-900 transition-colors">
                    {{ __('messages.resources') }}
                </a>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile Menu Toggle
        const button = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        if (button && menu) {
            button.addEventListener('click', function() {
                const isExpanded = button.getAttribute('aria-expanded') === 'true';

                menu.classList.toggle('hidden');
                button.setAttribute('aria-expanded', !isExpanded);

                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        }
    });
</script>
