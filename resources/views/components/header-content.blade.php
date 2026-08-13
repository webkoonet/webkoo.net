{{-- Header / Navbar - Megamenu Navigation --}}
<header class="bg-white/80 backdrop-blur-xl border-b border-gray-200/50 sticky top-0 z-[60] transition-transform duration-300">
    <div class="w-full">
        <div class="flex items-center justify-between h-16 px-6 lg:px-8">

            {{-- Left Side: Logo + Megamenu --}}
            <div class="flex items-center gap-8">
                @php
                    $currentLocale = app()->getLocale();
                    $isIndonesian = $currentLocale === 'id';
                    $requestUri = request()->getRequestUri();
                    $queryString = request()->getQueryString();
                    $queryParams = $queryString ? '?' . $queryString : '';

                    // Get path without locale prefix using helper
                    $pathWithoutLocale = getPathWithoutLocale(request()->path());

                    // Get translated paths using helper functions
                    $englishPath = getEnglishPath($pathWithoutLocale, $currentLocale);
                    $indonesianPath = getLocalizedPath($pathWithoutLocale, 'id');
                @endphp

                {{-- Logo --}}
                <a href="{{ $isIndonesian ? '/id' : '/' }}" class="flex items-center gap-2.5">
                    <img src="{{ asset('storage/assets/img/logo.webp') }}"
                         alt="Webkoo"
                         class="h-9 w-auto">
                    <span class="hidden sm:inline text-lg font-medium text-gray-900">
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

            {{-- Right Side: WA Button, Language Switcher & Mobile Menu Button --}}
            <div class="flex items-center gap-2 sm:gap-3 shrink-0">
                {{-- WhatsApp Button --}}
                <a href="https://wa.me/6285179995773"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="flex items-center gap-2 px-3 sm:px-4 py-2 text-sm font-medium rounded-full bg-white text-gray-900 hover:bg-gray-50 transition-colors shadow-sm border border-gray-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    <span>Ask WA</span>
                </a>

                {{-- Language Switcher --}}
                <form id="language-form" method="GET" action="">
                    <input type="hidden" name="lang" id="lang-input" value="{{ $isIndonesian ? 'id' : 'en' }}">
                    @foreach(request()->query() as $key => $value)
                        @if($key !== 'lang')
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                        @endif
                    @endforeach
                </form>

                <div class="relative">
                    <button type="button"
                            id="language-dropdown-btn"
                            class="flex items-center gap-1 sm:gap-2 px-2 sm:px-3 py-1.5 text-sm font-normal rounded-md transition-colors bg-gray-100 text-gray-900 hover:bg-gray-200 cursor-pointer">
                        <img src="{{ asset($isIndonesian ? 'storage/assets/img/flag-id.svg' : 'storage/assets/img/flag-en.svg') }}"
                             alt="{{ $isIndonesian ? 'Indonesian' : 'English' }}"
                             class="w-5 h-3 object-cover rounded">
                        <span class="hidden sm:inline">{{ $isIndonesian ? 'ID' : 'EN' }}</span>
                        <svg class="w-4 h-4 transition-transform" id="lang-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    {{-- Dropdown Menu --}}
                    <div id="language-dropdown"
                         class="absolute right-0 mt-2 w-40 bg-white rounded-lg shadow-lg border border-gray-200 hidden z-[60]">
                        <div class="py-1">
                            {{-- English Option --}}
                            <button type="button"
                                    data-lang="en"
                                    data-url="{{ '/' . ltrim($englishPath, '/') . $queryParams }}"
                                    class="language-option w-full flex items-center gap-2 px-4 py-2 text-sm {{ !$isIndonesian ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50' }} transition-colors">
                                <img src="{{ asset('storage/assets/img/flag-en.svg') }}"
                                     alt="English"
                                     class="w-5 h-3 object-cover rounded">
                                <span>English</span>
                            </button>

                            {{-- Indonesian Option --}}
                            <button type="button"
                                    data-lang="id"
                                    data-url="{{ '/id' . ($indonesianPath ? '/' . ltrim($indonesianPath, '/') : '') . $queryParams }}"
                                    class="language-option w-full flex items-center gap-2 px-4 py-2 text-sm {{ $isIndonesian ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-50' }} transition-colors">
                                <img src="{{ asset('storage/assets/img/flag-id.svg') }}"
                                     alt="Indonesian"
                                     class="w-5 h-3 object-cover rounded">
                                <span>Indonesian</span>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Mobile Menu Button --}}
                <button type="button"
                        id="mobile-menu-button"
                        class="lg:hidden p-2 text-gray-700 hover:text-gray-900 transition-colors"
                        aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
    </div>
</header>

{{-- Mobile Menu - Off-canvas (outside header for proper z-index) --}}
<div id="mobile-menu-backdrop" class="hidden fixed inset-0 bg-black/50 z-[60] transition-opacity duration-300 opacity-0"></div>
<div id="mobile-menu" class="hidden fixed top-0 right-0 h-full w-[85%] sm:w-[400px] bg-white z-[70] shadow-2xl transform translate-x-full transition-transform duration-300 ease-out">
            <div class="flex flex-col h-full">
                {{-- Header with Close Button --}}
                <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
                    <span class="text-lg font-semibold text-gray-900">Menu</span>
                    <button type="button"
                            id="mobile-menu-close"
                            class="p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded-lg transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                {{-- Scrollable Content --}}
                <div class="flex-1 overflow-y-auto px-6 py-4 space-y-2">

                    {{-- Pricing Megamenu (Mobile) --}}
                    <div class="mobile-megamenu-item">
                        <button type="button"
                                class="mobile-megamenu-trigger w-full flex items-center justify-between py-3 text-base font-medium text-gray-900 hover:text-gray-700 transition-colors">
                            <span>{{ __('messages.pricing') }}</span>
                            <svg class="w-5 h-5 transition-transform mobile-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="mobile-megamenu-content hidden pl-4 mt-2 space-y-2 pb-3 border-b border-gray-100">
                            <a href="#webkoo-builder" class="block py-2 text-sm text-gray-600 hover:text-gray-900">
                                <span class="font-medium">{{ __('messages.webkoo_builder') }}</span>
                                <span class="text-xs text-gray-500 block">{{ __('messages.webkoo_builder_desc') }}</span>
                            </a>
                            <a href="#wordpress" class="block py-2 text-sm text-gray-600 hover:text-gray-900">
                                <span class="font-medium">{{ __('messages.wordpress') }}</span>
                                <span class="text-xs text-gray-500 block">{{ __('messages.wordpress_desc') }}</span>
                            </a>
                            <a href="#custom" class="block py-2 text-sm text-gray-600 hover:text-gray-900">
                                <span class="font-medium">{{ __('messages.custom_build') }}</span>
                                <span class="text-xs text-gray-500 block">{{ __('messages.custom_build_desc') }}</span>
                            </a>
                            <a href="#contact" class="block py-2 text-sm text-blue-600 hover:text-blue-700">
                                {{ __('messages.need_custom_pricing') }} →
                            </a>
                        </div>
                    </div>

                    {{-- Products Megamenu (Mobile) --}}
                    <div class="mobile-megamenu-item">
                        <button type="button"
                                class="mobile-megamenu-trigger w-full flex items-center justify-between py-3 text-base font-medium text-gray-900 hover:text-gray-700 transition-colors">
                            <span>{{ __('messages.products') }}</span>
                            <svg class="w-5 h-5 transition-transform mobile-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="mobile-megamenu-content hidden pl-4 mt-2 space-y-2 pb-3 border-b border-gray-100">
                            <div class="pb-2">
                                <p class="text-xs font-semibold text-gray-900 mb-2">{{ __('messages.web_services') }}</p>
                                <a href="#websites" class="block py-1.5 text-sm text-gray-600 hover:text-gray-900">{{ __('messages.websites') }}</a>
                                <a href="#web-apps" class="block py-1.5 text-sm text-gray-600 hover:text-gray-900">{{ __('messages.web_apps') }}</a>
                                <a href="#ecommerce" class="block py-1.5 text-sm text-gray-600 hover:text-gray-900">{{ __('messages.ecommerce') }}</a>
                                <a href="#landing-pages" class="block py-1.5 text-sm text-gray-600 hover:text-gray-900">{{ __('messages.landing_pages') }}</a>
                            </div>
                            <a href="#contact" class="block py-2 text-sm text-blue-600 hover:text-blue-700">
                                {{ __('messages.consultation') }} →
                            </a>
                        </div>
                    </div>

                    {{-- Resources Megamenu (Mobile) --}}
                    <div class="mobile-megamenu-item">
                        <button type="button"
                                class="mobile-megamenu-trigger w-full flex items-center justify-between py-3 text-base font-medium text-gray-900 hover:text-gray-700 transition-colors">
                            <span>{{ __('messages.resources') }}</span>
                            <svg class="w-5 h-5 transition-transform mobile-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="mobile-megamenu-content hidden pl-4 mt-2 space-y-2 pb-3 border-b border-gray-100">
                            <div class="pb-2">
                                <p class="text-xs font-semibold text-gray-900 mb-2">{{ __('messages.learn') }}</p>
                                <a href="#blog" class="block py-1.5 text-sm text-gray-600 hover:text-gray-900">{{ __('messages.blog') }}</a>
                                <a href="#tutorials" class="block py-1.5 text-sm text-gray-600 hover:text-gray-900">{{ __('messages.tutorials') }}</a>
                                <a href="#documentation" class="block py-1.5 text-sm text-gray-600 hover:text-gray-900">{{ __('messages.documentation') }}</a>
                            </div>
                            <a href="#contact" class="block py-2 text-sm text-blue-600 hover:text-blue-700">
                                {{ __('messages.contact_us') }} →
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile Menu Toggle - Off-canvas
        const button = document.getElementById('mobile-menu-button');
        const closeBtn = document.getElementById('mobile-menu-close');
        const menu = document.getElementById('mobile-menu');
        const backdrop = document.getElementById('mobile-menu-backdrop');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        function openMenu() {
            // Show backdrop
            backdrop.classList.remove('hidden');
            setTimeout(() => {
                backdrop.classList.remove('opacity-0');
            }, 10);

            // Slide in menu
            menu.classList.remove('hidden');
            setTimeout(() => {
                menu.classList.remove('translate-x-full');
            }, 10);

            // Update button state
            button.setAttribute('aria-expanded', 'true');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');

            // Prevent body scroll
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            // Slide out menu
            menu.classList.add('translate-x-full');
            setTimeout(() => {
                menu.classList.add('hidden');
            }, 300);

            // Hide backdrop
            backdrop.classList.add('opacity-0');
            setTimeout(() => {
                backdrop.classList.add('hidden');
            }, 300);

            // Update button state
            button.setAttribute('aria-expanded', 'false');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');

            // Restore body scroll
            document.body.style.overflow = '';
        }

        if (button && menu) {
            button.addEventListener('click', openMenu);
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', closeMenu);
        }

        // Close menu when clicking backdrop
        if (backdrop) {
            backdrop.addEventListener('click', closeMenu);
        }

        // Close menu when clicking menu links
        const menuLinks = menu.querySelectorAll('a');
        menuLinks.forEach(function(link) {
            link.addEventListener('click', closeMenu);
        });

        // Mobile Megamenu Toggle
        const mobileMegamenuTriggers = document.querySelectorAll('.mobile-megamenu-trigger');
        mobileMegamenuTriggers.forEach(function(trigger) {
            trigger.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const chevron = this.querySelector('.mobile-chevron');

                // Toggle content visibility
                content.classList.toggle('hidden');

                // Rotate chevron
                if (chevron) {
                    chevron.classList.toggle('rotate-180');
                }
            });
        });

        // Language Dropdown Toggle
        const langDropdownBtn = document.getElementById('language-dropdown-btn');
        const langDropdown = document.getElementById('language-dropdown');
        const langChevron = document.getElementById('lang-chevron');

        if (langDropdownBtn && langDropdown) {
            // Toggle dropdown
            langDropdownBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                langDropdown.classList.toggle('hidden');
                langChevron.classList.toggle('rotate-180');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function() {
                if (!langDropdown.classList.contains('hidden')) {
                    langDropdown.classList.add('hidden');
                    langChevron.classList.remove('rotate-180');
                }
            });

            // Prevent dropdown from closing when clicking inside
            langDropdown.addEventListener('click', function(e) {
                e.stopPropagation();
            });

            // Handle language option clicks
            const langOptions = document.querySelectorAll('.language-option');
            langOptions.forEach(function(option) {
                option.addEventListener('click', function() {
                    const url = this.getAttribute('data-url');
                    if (url) {
                        window.location.href = url;
                    }
                });
            });
        }
    });
</script>
