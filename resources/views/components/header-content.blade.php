{{-- Header / Navbar - Minimalist Monochrome Glassmorphism --}}
<header class="bg-white/80 backdrop-blur-xl border-b border-gray-200/50 sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- Logo & Brand --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2.5">
                <img src="{{ asset('storage/assets/img/logo.webp') }}"
                     alt="Webkoo"
                     class="h-9 w-auto">
                <span class="text-lg font-medium text-gray-900">
                    Webkoo
                </span>
            </a>

            {{-- Right Side: Menu + Auth --}}
            <div class="hidden md:flex items-center gap-10">
                @php
                    $menuItems = [
                        ['name' => 'home', 'label' => 'Home'],
                        ['name' => 'about', 'label' => 'About', 'href' => '#about'],
                        ['name' => 'services', 'label' => 'Services', 'href' => '#services'],
                        ['name' => 'portfolio', 'label' => 'Portfolio', 'href' => '#portfolio'],
                        ['name' => 'contact', 'label' => 'Contact', 'href' => '#contact'],
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
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                                class="text-sm text-gray-600 hover:text-gray-900 transition-colors">
                            Logout
                        </button>
                    </form>
                @else
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}"
                           class="text-sm text-gray-600 hover:text-gray-900 transition-colors">
                            Login
                        </a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="text-sm font-medium text-gray-900 hover:text-gray-700 transition-colors">
                            Get Started
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
                        Dashboard
                    </a>

                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                                class="text-base text-gray-600 hover:text-gray-900 transition-colors text-left">
                            Logout
                        </button>
                    </form>
                @else
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}"
                           class="text-base text-gray-600 hover:text-gray-900 transition-colors">
                            Login
                        </a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="text-base font-medium text-gray-900">
                            Get Started
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
