@extends('layouts.presentation')

@section('title', 'Scalable Payment Systems & Backend Engineering | ' . config('app.name'))
@section('description', 'Expert backend engineering and payment system development for fintech, SaaS, and enterprise platforms. Specializing in Stripe integrations, subscription systems, payment orchestration, and cloud architecture.')
@section('keywords', 'payment systems, backend engineering, fintech development, stripe integration, subscription billing, payment orchestration, laravel development, PHP 8, microservices, cloud architecture, AWS, fintech consulting')
@section('og_title', 'Scalable Payment Systems & Backend Engineering | ' . config('app.name'))
@section('twitter_title', 'Scalable Payment Systems & Backend Engineering | ' . config('app.name'))

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-black dark:from-black dark:via-slate-950 dark:to-black overflow-hidden">
        <!-- Animated gradient orbs -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-red-600/30 rounded-full mix-blend-screen filter blur-3xl opacity-70 animate-blob"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-red-500/20 rounded-full mix-blend-screen filter blur-3xl opacity-60 animate-blob animation-delay-2000"></div>
            <div class="absolute top-40 left-40 w-80 h-80 bg-red-700/25 rounded-full mix-blend-screen filter blur-3xl opacity-65 animate-blob animation-delay-4000"></div>
        </div>

        <!-- Grid pattern -->
        <div class="absolute inset-0 bg-grid-white/[0.05] bg-[size:30px_30px]"></div>

        <!-- Diagonal lines for tech feel -->
        <div class="absolute inset-0 opacity-20">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="tech-pattern" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M0 50 L50 0 M50 100 L100 50" stroke="rgba(255,255,255,0.1)" stroke-width="1" fill="none"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#tech-pattern)"/>
            </svg>
        </div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
            <div class="text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-900/40 text-red-300 rounded-full text-sm font-medium mb-6 border border-red-500/30">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span>{{ __('Backend Engineering • Payments & Fintech • Distributed Systems • Cloud Architecture') }}</span>
                </div>
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">
                    {{ __('We Build Scalable Payment Systems') }}<br>
                    <span class="text-red-500">{{ __('& High-Performance Platforms') }}</span>
                </h1>
                <p class="mt-6 text-lg leading-8 text-slate-300 max-w-3xl mx-auto">
                    {{ config('app.name') }} {{ __('designs and delivers mission-critical software for fintech, SaaS, and enterprise platforms. We specialize in Stripe integrations, subscription systems, payment orchestration, API platforms, and event-driven architectures that scale predictably and securely.') }}
                </p>
                <div class="mt-8 flex items-center justify-center gap-3">
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-2.5 bg-red-600 hover:bg-red-700 text-white font-medium text-sm rounded-lg transition shadow-lg">
                        {{ __('Let\'s Build Your Platform') }}
                        <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center px-6 py-2.5 bg-transparent hover:bg-white/10 text-white font-medium text-sm rounded-lg border-2 border-red-500/50 hover:border-red-500 transition">
                        {{ __('Our Services') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <h2 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-5xl">
                    {{ __('Why') }} {{ config('app.name') }}
                </h2>
                <p class="mt-6 text-xl text-slate-600 dark:text-slate-400 max-w-3xl mx-auto">
                    {{ __('Deep technical expertise in payments, backend systems, and scalable cloud architecture') }}
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Feature 1 - Payments -->
                <div class="relative p-8 bg-slate-50 dark:bg-slate-800/50 rounded-2xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 transition-all">
                    <div class="inline-flex items-center justify-center w-14 h-14 bg-red-100 dark:bg-red-900/30 rounded-xl mb-6">
                        <svg class="h-7 w-7 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('Deep Payments Expertise') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        {{ __('We architect subscription systems, ACH flows, multi-party payouts, and reliable webhook infrastructures for companies that cannot afford billing mistakes.') }}
                    </p>
                </div>

                <!-- Feature 2 - Backend -->
                <div class="relative p-8 bg-slate-50 dark:bg-slate-800/50 rounded-2xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 transition-all">
                    <div class="inline-flex items-center justify-center w-14 h-14 bg-red-100 dark:bg-red-900/30 rounded-xl mb-6">
                        <svg class="h-7 w-7 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('High-Performance Backend') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        {{ __('We design backend systems optimized for speed, resilience, and long-term maintainability using PHP 8, Laravel, Redis, MySQL/PostgreSQL, and modern distributed patterns.') }}
                    </p>
                </div>

                <!-- Feature 3 - Cloud -->
                <div class="relative p-8 bg-slate-50 dark:bg-slate-800/50 rounded-2xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 transition-all">
                    <div class="inline-flex items-center justify-center w-14 h-14 bg-red-100 dark:bg-red-900/30 rounded-xl mb-6">
                        <svg class="h-7 w-7 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('Event-Driven Architecture') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        {{ __('We build event pipelines, queue-based workflows, microservices, and horizontally scalable systems using AWS, Redis, Docker, and modern tooling.') }}
                    </p>
                </div>

                <!-- Feature 4 - Security -->
                <div class="relative p-8 bg-slate-50 dark:bg-slate-800/50 rounded-2xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 transition-all">
                    <div class="inline-flex items-center justify-center w-14 h-14 bg-red-100 dark:bg-red-900/30 rounded-xl mb-6">
                        <svg class="h-7 w-7 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('Security & Compliance') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                        {{ __('From PCI-aligned data handling to secure onboarding and identity flows, we design software that meets serious industry standards.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Deliver Section -->
    <section class="relative py-16 sm:py-20 bg-gradient-to-br from-slate-50 via-white to-slate-100 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid-pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="rgba(239, 68, 68, 0.3)" stroke-width="1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-pattern)"/>
            </svg>
        </div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-5xl mb-6">
                    {{ __('What We Deliver') }}
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 max-w-3xl mx-auto">
                    {{ __('Enterprise-grade systems built for scale, reliability, and long-term success') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="group relative bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-lg">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                                <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Payment Orchestration Layers') }}</h3>
                    </div>
                </div>

                <div class="group relative bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-lg">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                                <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Stripe Billing / Connect / ACH') }}</h3>
                    </div>
                </div>

                <div class="group relative bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-lg">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                                <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Fintech-Grade Backend Systems') }}</h3>
                    </div>
                </div>

                <div class="group relative bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-lg">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                                <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Scalable API Platforms') }}</h3>
                    </div>
                </div>

                <div class="group relative bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-lg">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                                <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Event-Driven Processing') }}</h3>
                    </div>
                </div>

                <div class="group relative bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-lg">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                                <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Subscription & Invoicing Engines') }}</h3>
                    </div>
                </div>

                <div class="group relative bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-lg">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                                <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Cloud Infrastructure & Tuning') }}</h3>
                    </div>
                </div>

                <div class="group relative bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-lg">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                                <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Legacy Payment Migrations') }}</h3>
                    </div>
                </div>

                <div class="group relative bg-white dark:bg-slate-800 p-6 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-lg">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                                <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Distributed Queue Workflows') }}</h3>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services') }}" class="inline-flex items-center px-6 py-2.5 bg-red-600 hover:bg-red-700 text-white font-medium text-sm rounded-lg transition shadow-lg">
                    {{ __('View All Services') }}
                    <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Work / Case Studies Section -->
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-5xl mb-6">
                    {{ __('Featured Work') }}
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 max-w-3xl mx-auto">
                    {{ __('Real projects, real results — see how we\'ve helped companies build scalable payment systems and high-performance platforms') }}
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Case Study 1 -->
                <div class="group bg-slate-50 dark:bg-slate-800 rounded-2xl p-8 border border-slate-200 dark:border-slate-700 hover:border-red-500/50 transition-all hover:shadow-xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-full text-xs font-medium mb-4">
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <span>{{ __('Payments') }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('Migration from ChargeOver to Stripe Billing') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                        {{ __('Financial Platform, USA') }}
                    </p>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        {{ __('Complete payment infrastructure migration with zero downtime. Implemented ACH onboarding, webhook orchestration, and resilient retry logic for a financial platform serving thousands of customers.') }}
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs rounded">Stripe Billing</span>
                        <span class="px-2 py-1 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs rounded">ACH</span>
                        <span class="px-2 py-1 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs rounded">Laravel</span>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="group bg-slate-50 dark:bg-slate-800 rounded-2xl p-8 border border-slate-200 dark:border-slate-700 hover:border-red-500/50 transition-all hover:shadow-xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-full text-xs font-medium mb-4">
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                        </svg>
                        <span>{{ __('Platform') }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('Real-Time Inventory Platform for Retail') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                        {{ __('Custom ERP/Cloud Sync') }}
                    </p>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        {{ __('Built a high-performance inventory engine managing 2,000+ SKUs with real-time cloud and local sync, delta-based updates, and conflict resolution for concurrent operations.') }}
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs rounded">Laravel</span>
                        <span class="px-2 py-1 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs rounded">Redis</span>
                        <span class="px-2 py-1 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs rounded">MySQL</span>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="group bg-slate-50 dark:bg-slate-800 rounded-2xl p-8 border border-slate-200 dark:border-slate-700 hover:border-red-500/50 transition-all hover:shadow-xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-full text-xs font-medium mb-4">
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                        <span>{{ __('Architecture') }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('Policy Management System for Insurance') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm mb-4">
                        {{ __('Microservices + Event Architecture') }}
                    </p>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                        {{ __('Designed scalable microservices architecture for insurance platform with automated workflows, policy lifecycle management, and secure document processing with full audit trails.') }}
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs rounded">PHP 8</span>
                        <span class="px-2 py-1 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs rounded">Microservices</span>
                        <span class="px-2 py-1 bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs rounded">AWS</span>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('case-studies') }}" class="inline-flex items-center px-6 py-2.5 bg-red-600 hover:bg-red-700 text-white font-medium text-sm rounded-lg transition shadow-lg">
                    {{ __('See All Case Studies') }}
                    <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <x-presentation.clients />

    <!-- CTA Section -->
    <section class="py-16 sm:py-20 bg-gradient-to-br from-slate-900 via-slate-800 to-black dark:from-black dark:via-slate-950 dark:to-black">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">
                    {{ __('Ready to get started?') }}
                </h2>
                <p class="mt-6 text-xl text-slate-300">
                    {{ __('Join thousands of satisfied customers who trust us with their business.') }}
                </p>
                <div class="mt-10 flex items-center justify-center gap-3">
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-2.5 bg-red-600 hover:bg-red-700 text-white font-medium text-sm rounded-lg transition shadow-lg">
                        {{ __('Contact Us') }}
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center px-6 py-2.5 bg-transparent hover:bg-white/10 text-white font-medium text-sm rounded-lg border-2 border-red-500/50 hover:border-red-500 transition">
                        {{ __('View Services') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
