@extends('layouts.presentation')

@section('content')
    <!-- Page Header -->
    <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-black dark:from-black dark:via-slate-950 dark:to-black py-8 sm:py-12 overflow-hidden">
        <!-- Animated gradient orbs -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-red-600/30 rounded-full mix-blend-screen filter blur-3xl opacity-70 animate-blob"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-red-500/20 rounded-full mix-blend-screen filter blur-3xl opacity-60 animate-blob animation-delay-2000"></div>
            <div class="absolute top-40 left-40 w-80 h-80 bg-red-700/25 rounded-full mix-blend-screen filter blur-3xl opacity-65 animate-blob animation-delay-4000"></div>
        </div>
        <!-- Grid pattern -->
        <div class="absolute inset-0 bg-grid-white/[0.05] bg-[size:30px_30px]"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">
                    {{ __('About Us') }}
                </h1>
                <p class="mt-4 text-lg text-slate-300 max-w-2xl mx-auto">
                    {{ __('Learn more about our mission, vision, and the team behind our success.') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="py-24 sm:py-32 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-6">
                        {{ __('Our Story') }}
                    </h2>
                    <div class="space-y-4 text-slate-600 dark:text-slate-300 text-lg leading-relaxed">
                        <p>
                            {{ __('Founded in 2024, we have been at the forefront of digital innovation, helping businesses transform and thrive in the digital age.') }}
                        </p>
                        <p>
                            {{ __('Our journey began with a simple mission: to provide cutting-edge technology solutions that empower businesses to reach their full potential.') }}
                        </p>
                        <p>
                            {{ __('Today, we serve thousands of clients worldwide, delivering exceptional results and building lasting partnerships.') }}
                        </p>
                    </div>
                    <div class="mt-8 grid grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-red-600 dark:text-red-400">500+</div>
                            <div class="text-sm text-slate-600 dark:text-slate-400 mt-1">{{ __('Clients') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-red-600 dark:text-red-400">50+</div>
                            <div class="text-sm text-slate-600 dark:text-slate-400 mt-1">{{ __('Team Members') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-red-600 dark:text-red-400">99%</div>
                            <div class="text-sm text-slate-600 dark:text-slate-400 mt-1">{{ __('Satisfaction') }}</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="aspect-square rounded-2xl bg-gradient-to-br from-red-600/20 to-slate-900/50 dark:from-red-600/30 dark:to-black/50 backdrop-blur-sm border border-red-500/20 flex items-center justify-center">
                        <svg class="h-32 w-32 text-red-600/30 dark:text-red-400/30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="relative py-16 sm:py-20 bg-gradient-to-br from-slate-900 via-slate-800 to-black dark:from-black dark:via-slate-950 dark:to-black overflow-hidden">
        <!-- Animated gradient orbs -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 right-20 w-64 h-64 bg-red-600/20 rounded-full mix-blend-screen filter blur-3xl opacity-60 animate-blob"></div>
            <div class="absolute bottom-20 left-20 w-64 h-64 bg-red-500/15 rounded-full mix-blend-screen filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
        </div>
        <!-- Grid pattern -->
        <div class="absolute inset-0 bg-grid-white/[0.02] bg-[size:30px_30px]"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-slate-800/90 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-red-500/50">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-xl mb-6">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">{{ __('Our Mission') }}</h3>
                    <p class="text-slate-300 leading-relaxed">
                        {{ __('To empower businesses with innovative technology solutions that drive growth, efficiency, and success in the digital era.') }}
                    </p>
                </div>
                <div class="bg-slate-800/90 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-red-500/50">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-xl mb-6">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">{{ __('Our Vision') }}</h3>
                    <p class="text-slate-300 leading-relaxed">
                        {{ __('To be the leading technology partner for businesses worldwide, recognized for excellence, innovation, and exceptional customer service.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-24 sm:py-32 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 dark:text-white">
                    {{ __('Our Values') }}
                </h2>
                <p class="mt-4 text-lg text-slate-600 dark:text-slate-300">
                    {{ __('The principles that guide everything we do') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full mb-6 group-hover:scale-110 transition-transform">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                        {{ __('Excellence') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300">
                        {{ __('We strive for excellence in everything we do') }}
                    </p>
                </div>

                <div class="text-center group">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full mb-6 group-hover:scale-110 transition-transform">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                        {{ __('Innovation') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300">
                        {{ __('Constantly pushing boundaries and exploring new ideas') }}
                    </p>
                </div>

                <div class="text-center group">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full mb-6 group-hover:scale-110 transition-transform">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                        {{ __('Integrity') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300">
                        {{ __('Building trust through transparency and honesty') }}
                    </p>
                </div>

                <div class="text-center group">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full mb-6 group-hover:scale-110 transition-transform">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 dark:text-white mb-2">
                        {{ __('Quality') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300">
                        {{ __('Delivering superior quality in every project') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <x-presentation.clients />
@endsection
