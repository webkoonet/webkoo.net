{{-- Header / Navbar - Minimalist Monochrome Glassmorphism --}}
<header class="bg-white/80 backdrop-blur-xl border-b border-gray-200/50 sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- Logo & Brand --}}
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
            <a href="{{ $isIndonesian ? '/' : route('home') }}" class="flex items-center gap-2.5">
                <img src="{{ asset('storage/assets/img/logo.webp') }}"
                     alt="Webkoo"
                     class="h-9 w-auto">
                <span class="text-lg font-medium text-gray-900">
                    Webkoo
                </span>
            </a>

            {{-- Right Side: Language + Menu + Auth --}}
            <div class="hidden md:flex items-center gap-10">
                {{-- Language Switcher --}}
                <div class="flex items-center gap-1">
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

                @php
                    $menuItems = [
                        ['name' => 'home', 'label' => __('messages.home')],
                        ['name' => 'about', 'label' => __('messages.about'), 'href' => '#about'],
                        ['name' => 'services', 'label' => __('messages.services'), 'href' => '#services'],
                        ['name' => 'portfolio', 'label' => __('messages.portfolio'), 'href' => '#portfolio'],
                        ['name' => 'contact', 'label' => __('messages.contact'), 'href' => '#contact'],
                    ];
                @endphp

                {{-- Menu Navigation --}}
                @foreach($menuItems as $item)
                    @php
                        $isActive = isset($item['href']) ? false : request()->routeIs($item['name']);
                        $href = $item['href'] ?? route($item['name']);
                    @endphp
                    <a href="{{ $href }}"
                       class="text-sm font-normal text-gray-600 hover:text-gray-900 transition-colors {{ $isActive ? 'text-gray-900 font-medium' : '' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach

                {{-- Divider --}}
                <div class="w-px h-6 bg-gray-300"></div>

                {{-- Auth Links --}}
                @auth
                    <a href="{{ route('dashboard') }}"
                       class="text-sm text-gray-600 hover:text-gray-900 transition-colors">
                        {{ __('messages.dashboard') }}
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                                class="text-sm text-gray-600 hover:text-gray-900 transition-colors">
                            {{ __('messages.logout') }}
                        </button>
                    </form>
                @else
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}"
                           class="text-sm text-gray-600 hover:text-gray-900 transition-colors">
                            {{ __('messages.login') }}
                        </a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="text-sm font-medium text-gray-900 hover:text-gray-700 transition-colors">
                            {{ __('messages.get_started') }}
                        </a>
                    @endif
                @endauth
            </div>

            {{-- Mobile Menu Button --}}
            <button type="button"
                    id="mobile-menu-button"
                    class="md:hidden p-2 -mr-2 text-gray-700 hover:text-gray-900 transition-colors"
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
        <div id="mobile-menu" class="hidden md:hidden pb-6">
            <div class="flex flex-col gap-4">
                {{-- Language Switcher (Mobile) --}}
                <div class="flex items-center gap-2">
                    <span class="text-sm text-gray-600">{{ __('messages.language') }}:</span>
                    <a href="{{ '/' . ltrim($pathWithoutLocale, '/') . $queryParams }}"
                       class="text-sm font-medium {{ !$isIndonesian ? 'text-gray-900' : 'text-gray-600 hover:text-gray-900' }}">
                        EN
                    </a>
                    <span class="text-gray-300">|</span>
                    <a href="{{ '/id' . ($pathWithoutLocale ? '/' . ltrim($pathWithoutLocale, '/') : '') . $queryParams }}"
                       class="text-sm font-medium {{ $isIndonesian ? 'text-gray-900' : 'text-gray-600 hover:text-gray-900' }}">
                        ID
                    </a>
                </div>

                @foreach($menuItems as $item)
                    @php
                        $isActiveMobile = isset($item['href']) ? false : request()->routeIs($item['name']);
                        $hrefMobile = $item['href'] ?? route($item['name']);
                    @endphp
                    <a href="{{ $hrefMobile }}"
                       class="text-base text-gray-600 hover:text-gray-900 transition-colors {{ $isActiveMobile ? 'text-gray-900 font-medium' : '' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach

                @auth
                    <a href="{{ route('dashboard') }}"
                       class="text-base text-gray-600 hover:text-gray-900 transition-colors">
                        {{ __('messages.dashboard') }}
                    </a>

                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                                class="text-base text-gray-600 hover:text-gray-900 transition-colors text-left">
                            {{ __('messages.logout') }}
                        </button>
                    </form>
                @else
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}"
                           class="text-base text-gray-600 hover:text-gray-900 transition-colors">
                            {{ __('messages.login') }}
                        </a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="text-base font-medium text-gray-900">
                            {{ __('messages.get_started') }}
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
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
