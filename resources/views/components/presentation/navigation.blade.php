<nav x-data="{ mobileMenuOpen: false }" class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-700">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <img src="{{ asset('storage/logos/default-dark.png') }}" alt="{{ config('app.name') }}" class="h-20 w-auto dark:hidden">
                    <img src="{{ asset('storage/logos/default.png') }}" alt="{{ config('app.name') }}" class="h-20 w-auto hidden dark:block">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex md:items-center md:gap-8">
                <a href="{{ route('home') }}" class="text-sm font-medium {{ request()->routeIs('home') ? 'text-red-600 dark:text-red-400' : 'text-slate-700 hover:text-red-600 dark:text-slate-300 dark:hover:text-red-400' }} transition">
                    {{ __('Home') }}
                </a>
                <a href="{{ route('about') }}" class="text-sm font-medium {{ request()->routeIs('about') ? 'text-red-600 dark:text-red-400' : 'text-slate-700 hover:text-red-600 dark:text-slate-300 dark:hover:text-red-400' }} transition">
                    {{ __('About') }}
                </a>
                <a href="{{ route('services') }}" class="text-sm font-medium {{ request()->routeIs('services') ? 'text-red-600 dark:text-red-400' : 'text-slate-700 hover:text-red-600 dark:text-slate-300 dark:hover:text-red-400' }} transition">
                    {{ __('Services') }}
                </a>
                <a href="{{ route('case-studies') }}" class="text-sm font-medium {{ request()->routeIs('case-studies') ? 'text-red-600 dark:text-red-400' : 'text-slate-700 hover:text-red-600 dark:text-slate-300 dark:hover:text-red-400' }} transition">
                    {{ __('Case Studies') }}
                </a>
                <a href="{{ route('contact') }}" class="text-sm font-medium {{ request()->routeIs('contact') ? 'text-red-600 dark:text-red-400' : 'text-slate-700 hover:text-red-600 dark:text-slate-300 dark:hover:text-red-400' }} transition">
                    {{ __('Contact') }}
                </a>
            </div>

            <!-- Right Side Actions -->
            <div class="flex items-center gap-3">
                <!-- Language Switcher -->
                <div class="hidden md:block">
                    <a href="{{ route('language.switch', 'en') }}" class="inline-flex items-center px-3 py-1.5 text-xs font-medium {{ app()->getLocale() === 'en' ? 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300' : 'text-slate-600 hover:bg-slate-100 dark:text-slate-400 dark:hover:bg-slate-800' }} rounded-md transition">
                        EN
                    </a>
                    <a href="{{ route('language.switch', 'ro') }}" class="ml-1 inline-flex items-center px-3 py-1.5 text-xs font-medium {{ app()->getLocale() === 'ro' ? 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300' : 'text-slate-600 hover:bg-slate-100 dark:text-slate-400 dark:hover:bg-slate-800' }} rounded-md transition">
                        RO
                    </a>
                </div>

                {{-- @auth
                    <!-- Dashboard Link for Authenticated Users -->
                    <a href="{{ route('dashboard') }}" class="hidden md:inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md transition shadow-sm">
                        <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        {{ __('Dashboard') }}
                    </a>
                @else
                    <!-- Login Link -->
                    <a href="{{ route('login') }}" class="hidden md:inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md transition shadow-sm">
                        <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        {{ __('Log in') }}
                    </a>
                @endauth --}}

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-slate-700 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800 transition">
                    <span class="sr-only">Open main menu</span>
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-cloak class="md:hidden border-t border-slate-200 dark:border-slate-700">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'bg-red-50 text-red-600 dark:bg-slate-800 dark:text-red-400' : 'text-slate-700 hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800' }} transition">
                {{ __('Home') }}
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'bg-red-50 text-red-600 dark:bg-slate-800 dark:text-red-400' : 'text-slate-700 hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800' }} transition">
                {{ __('About') }}
            </a>
            <a href="{{ route('services') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('services') ? 'bg-red-50 text-red-600 dark:bg-slate-800 dark:text-red-400' : 'text-slate-700 hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800' }} transition">
                {{ __('Services') }}
            </a>
            <a href="{{ route('case-studies') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('case-studies') ? 'bg-red-50 text-red-600 dark:bg-slate-800 dark:text-red-400' : 'text-slate-700 hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800' }} transition">
                {{ __('Case Studies') }}
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'bg-red-50 text-red-600 dark:bg-slate-800 dark:text-red-400' : 'text-slate-700 hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800' }} transition">
                {{ __('Contact') }}
            </a>

            <!-- Language Switcher Mobile -->
            <div class="flex gap-2 px-3 py-2 justify-center">
                <a href="{{ route('language.switch', 'en') }}" class="inline-flex items-center px-4 py-1.5 text-xs font-medium {{ app()->getLocale() === 'en' ? 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300' : 'bg-slate-100 text-slate-600 dark:bg-slate-800 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-700' }} rounded-md transition">
                    EN
                </a>
                <a href="{{ route('language.switch', 'ro') }}" class="inline-flex items-center px-4 py-1.5 text-xs font-medium {{ app()->getLocale() === 'ro' ? 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300' : 'bg-slate-100 text-slate-600 dark:bg-slate-800 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-700' }} rounded-md transition">
                    RO
                </a>
            </div>

            {{-- @auth
                <a href="{{ route('dashboard') }}" class="flex items-center justify-center mx-3 mt-3 px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md transition shadow-sm">
                    <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    {{ __('Dashboard') }}
                </a>
            @else
                <a href="{{ route('login') }}" class="flex items-center justify-center mx-3 mt-3 px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md transition shadow-sm">
                    <svg class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg>
                    {{ __('Log in') }}
                </a>
            @endauth --}}
        </div>
    </div>
</nav>
