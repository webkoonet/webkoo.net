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
                            <div class="bg-white border border-gray-200 rounded-2xl shadow-xl p-6 w-[600px] -ml-4">
                                <div class="grid grid-cols-3 gap-6">
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-3">{{ __('messages.pricing') }}</h3>
                                        <ul class="space-y-2">
                                            <li><a href="#starter" class="text-sm text-gray-600 hover:text-gray-900">Starter</a></li>
                                            <li><a href="#professional" class="text-sm text-gray-600 hover:text-gray-900">Professional</a></li>
                                            <li><a href="#enterprise" class="text-sm text-gray-600 hover:text-gray-900">Enterprise</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-3">Compare</h3>
                                        <ul class="space-y-2">
                                            <li><a href="#compare" class="text-sm text-gray-600 hover:text-gray-900">All Plans</a></li>
                                            <li><a href="#features" class="text-sm text-gray-600 hover:text-gray-900">Features</a></li>
                                        </ul>
                                    </div>
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <p class="text-sm text-gray-700 font-medium mb-2">Need custom pricing?</p>
                                        <a href="#contact" class="text-sm text-gray-900 hover:underline">Contact Sales →</a>
                                    </div>
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
                            <div class="bg-white border border-gray-200 rounded-2xl shadow-xl p-6 w-[700px] -ml-4">
                                <div class="grid grid-cols-3 gap-6">
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-3">Web Development</h3>
                                        <ul class="space-y-2">
                                            <li><a href="#websites" class="text-sm text-gray-600 hover:text-gray-900">Websites</a></li>
                                            <li><a href="#web-apps" class="text-sm text-gray-600 hover:text-gray-900">Web Apps</a></li>
                                            <li><a href="#ecommerce" class="text-sm text-gray-600 hover:text-gray-900">E-Commerce</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-3">Mobile & IoT</h3>
                                        <ul class="space-y-2">
                                            <li><a href="#mobile" class="text-sm text-gray-600 hover:text-gray-900">Mobile Apps</a></li>
                                            <li><a href="#iot" class="text-sm text-gray-600 hover:text-gray-900">Microcontrollers</a></li>
                                            <li><a href="#embedded" class="text-sm text-gray-600 hover:text-gray-900">Embedded Systems</a></li>
                                        </ul>
                                    </div>
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <p class="text-sm text-gray-700 font-medium mb-2">Explore all products</p>
                                        <a href="#all-products" class="text-sm text-gray-900 hover:underline">View Catalog →</a>
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
                            <div class="bg-white border border-gray-200 rounded-2xl shadow-xl p-6 w-[700px] -ml-4">
                                <div class="grid grid-cols-3 gap-6">
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-3">Learn</h3>
                                        <ul class="space-y-2">
                                            <li><a href="#blog" class="text-sm text-gray-600 hover:text-gray-900">Blog</a></li>
                                            <li><a href="#tutorials" class="text-sm text-gray-600 hover:text-gray-900">Tutorials</a></li>
                                            <li><a href="#documentation" class="text-sm text-gray-600 hover:text-gray-900">Documentation</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-3">Support</h3>
                                        <ul class="space-y-2">
                                            <li><a href="#help-center" class="text-sm text-gray-600 hover:text-gray-900">Help Center</a></li>
                                            <li><a href="#community" class="text-sm text-gray-600 hover:text-gray-900">Community</a></li>
                                            <li><a href="#faq" class="text-sm text-gray-600 hover:text-gray-900">FAQ</a></li>
                                        </ul>
                                    </div>
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <p class="text-sm text-gray-700 font-medium mb-2">Get in touch</p>
                                        <a href="#contact-support" class="text-sm text-gray-900 hover:underline">Contact Support →</a>
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
