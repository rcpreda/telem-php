@extends('layouts.presentation')

@section('title', 'Case Studies - Payment Migrations, Platform Engineering & System Modernization | ' . config('app.name'))
@section('description', 'Real projects, real results. See how we helped companies migrate payment systems, build high-performance platforms, and modernize legacy architectures. Stripe migrations, inventory platforms, insurance systems, and lending platform transformations.')
@section('keywords', 'payment migration case study, stripe migration, platform modernization, legacy system upgrade, fintech case studies, backend engineering portfolio, microservices implementation, real-time inventory system, insurance platform development')
@section('og_title', 'Case Studies - Payment Migrations, Platform Engineering & System Modernization | ' . config('app.name'))
@section('twitter_title', 'Case Studies - Payment Migrations, Platform Engineering & System Modernization | ' . config('app.name'))

@section('content')
    <!-- Page Header -->
    <section class="relative bg-gradient-to-br from-slate-900 via-slate-800 to-black dark:from-black dark:via-slate-950 dark:to-black py-16 sm:py-20 overflow-hidden">
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
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">
                    {{ __('Case Studies') }}
                </h1>
                <p class="mt-6 text-lg text-slate-300 max-w-3xl mx-auto">
                    {{ __('Real projects, real results — see how we\'ve helped companies build scalable payment systems, high-performance platforms, and mission-critical infrastructure') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Case Study 1: Stripe Migration -->
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-full text-sm font-medium mb-6">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <span>{{ __('Case Study #1: Payments') }}</span>
                    </div>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-4">
                        {{ __('Payment Infrastructure Migration') }}
                    </h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400 mb-6">
                        {{ __('ChargeOver → Stripe Billing') }}
                    </p>

                    <div class="space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Client') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400">{{ __('Financial Platform (USA)') }}</p>
                            <p class="text-sm text-slate-500 dark:text-slate-500 mt-1">{{ __('Tech: Stripe Billing, ACH, PHP 8, Laravel, Redis, AWS') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Challenge') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                {{ __('The company relied on an outdated billing system (ChargeOver), with recurring errors, rigid API capabilities, and low payment recovery rates. They needed a modern payment stack with ACH, subscriptions, proration, retries, and full automation — without downtime.') }}
                            </p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Solution') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-4">
                                {{ __('We architected a complete Stripe migration:') }}
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Modeled products, prices, and subscription lifecycles') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Built an adapter-based payment orchestration layer') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Implemented ACH onboarding & micro-deposit verification') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Created resilient webhook handlers with retries + idempotency') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Designed payout routes for multi-party financial flows') }}</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Results') }}</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg border border-green-200 dark:border-green-800">
                                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">0</div>
                                    <div class="text-sm text-green-700 dark:text-green-300">{{ __('Downtime') }}</div>
                                </div>
                                <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg border border-green-200 dark:border-green-800">
                                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">-40%</div>
                                    <div class="text-sm text-green-700 dark:text-green-300">{{ __('Failed Payments') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-red-600/10 to-slate-900/20 dark:from-red-600/20 dark:to-black/30 rounded-2xl p-8 border border-red-500/20">
                        <div class="space-y-4">
                            <div class="flex items-center gap-3 p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="w-10 h-10 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-slate-900 dark:text-white">{{ __('Simplified Reporting') }}</div>
                                    <div class="text-sm text-slate-600 dark:text-slate-400">{{ __('Streamlined accounting') }}</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="w-10 h-10 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-slate-900 dark:text-white">{{ __('Scalable Architecture') }}</div>
                                    <div class="text-sm text-slate-600 dark:text-slate-400">{{ __('Ready for new revenue models') }}</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="w-10 h-10 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-semibold text-slate-900 dark:text-white">{{ __('Zero Downtime') }}</div>
                                    <div class="text-sm text-slate-600 dark:text-slate-400">{{ __('Seamless migration') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study 2: Inventory Platform -->
    <section class="py-16 sm:py-20 bg-slate-50 dark:bg-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="lg:order-2">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-full text-sm font-medium mb-6">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                        </svg>
                        <span>{{ __('Case Study #2: Platform') }}</span>
                    </div>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-4">
                        {{ __('Real-Time Inventory Platform for Retail') }}
                    </h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400 mb-6">
                        {{ __('2,000+ SKU Custom ERP/Cloud Sync') }}
                    </p>

                    <div class="space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Client') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400">{{ __('Retail / eCommerce') }}</p>
                            <p class="text-sm text-slate-500 dark:text-slate-500 mt-1">{{ __('Tech: Laravel, Redis, MySQL, Cloud + Local Sync') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Challenge') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                {{ __('Retailers needed a system to manage >2000 SKUs across both cloud and local stores, with real-time sync and fail-safe operations.') }}
                            </p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Solution') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-4">
                                {{ __('We delivered a high-performance inventory engine:') }}
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Modular architecture') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Delta-based sync between cloud & POS') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Conflict resolution for concurrent updates') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Near-instant stock adjustments with Redis caching') }}</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Results') }}</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg border border-green-200 dark:border-green-800">
                                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">98%</div>
                                    <div class="text-sm text-green-700 dark:text-green-300">{{ __('Faster Updates') }}</div>
                                </div>
                                <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg border border-green-200 dark:border-green-800">
                                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">0</div>
                                    <div class="text-sm text-green-700 dark:text-green-300">{{ __('Sync Conflicts') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative lg:order-1">
                    <div class="bg-gradient-to-br from-red-600/10 to-slate-900/20 dark:from-red-600/20 dark:to-black/30 rounded-2xl p-8 border border-red-500/20">
                        <div class="text-center mb-6">
                            <div class="text-5xl font-bold text-red-600 dark:text-red-400 mb-2">2,000+</div>
                            <div class="text-slate-600 dark:text-slate-400">{{ __('SKUs Managed') }}</div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center p-3 bg-white dark:bg-slate-800 rounded-lg">
                                <span class="text-sm font-medium text-slate-900 dark:text-white">{{ __('Cloud Sync') }}</span>
                                <span class="text-xs px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 rounded">{{ __('Active') }}</span>
                            </div>
                            <div class="flex justify-between items-center p-3 bg-white dark:bg-slate-800 rounded-lg">
                                <span class="text-sm font-medium text-slate-900 dark:text-white">{{ __('Local POS') }}</span>
                                <span class="text-xs px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 rounded">{{ __('Synced') }}</span>
                            </div>
                            <div class="flex justify-between items-center p-3 bg-white dark:bg-slate-800 rounded-lg">
                                <span class="text-sm font-medium text-slate-900 dark:text-white">{{ __('Multi-Store') }}</span>
                                <span class="text-xs px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 rounded">{{ __('Enabled') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study 3: Insurance Platform -->
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-full text-sm font-medium mb-6">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                        <span>{{ __('Case Study #3: Architecture') }}</span>
                    </div>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-4">
                        {{ __('Policy Management System for Insurance') }}
                    </h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400 mb-6">
                        {{ __('Microservices + Event Architecture') }}
                    </p>

                    <div class="space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Client') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400">{{ __('Insurance Platform') }}</p>
                            <p class="text-sm text-slate-500 dark:text-slate-500 mt-1">{{ __('Tech: PHP 8, Laravel, Redis, AWS, Microservices') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Challenge') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                {{ __('Client needed a scalable, modular system to manage thousands of insurance policies: updates, renewals, events, customer-facing portal.') }}
                            </p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Solution') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-4">
                                {{ __('We built:') }}
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Microservices architecture for policy management') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Automated workflows for renewals & compliance') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Customer portal for policy updates') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Secure document processing + auditing') }}</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Results') }}</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg border border-green-200 dark:border-green-800">
                                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">-70%</div>
                                    <div class="text-sm text-green-700 dark:text-green-300">{{ __('Manual Operations') }}</div>
                                </div>
                                <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg border border-green-200 dark:border-green-800">
                                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">100%</div>
                                    <div class="text-sm text-green-700 dark:text-green-300">{{ __('Visibility') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-red-600/10 to-slate-900/20 dark:from-red-600/20 dark:to-black/30 rounded-2xl p-8 border border-red-500/20">
                        <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-6">{{ __('System Architecture') }}</h4>
                        <div class="space-y-4">
                            <div class="p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded flex items-center justify-center">
                                        <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-slate-900 dark:text-white">{{ __('Microservices') }}</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-400">{{ __('Modular, scalable architecture') }}</p>
                            </div>
                            <div class="p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded flex items-center justify-center">
                                        <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-slate-900 dark:text-white">{{ __('Event-Driven') }}</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-400">{{ __('Real-time policy updates') }}</p>
                            </div>
                            <div class="p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded flex items-center justify-center">
                                        <svg class="h-4 w-4 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-slate-900 dark:text-white">{{ __('Secure & Audited') }}</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-400">{{ __('Full compliance tracking') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study 4: Backend Platform Rewrite -->
    <section class="py-16 sm:py-20 bg-slate-50 dark:bg-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="lg:order-2">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-full text-sm font-medium mb-6">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        <span>{{ __('Case Study #4: Performance') }}</span>
                    </div>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-4">
                        {{ __('Backend Platform Rewrite & High-Volume Content Processing') }}
                    </h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400 mb-6">
                        {{ __('High-Performance Parsing, Asynchronous Workflows') }}
                    </p>

                    <div class="space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Client') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400">{{ __('Content Syndication / eCommerce Integrations') }}</p>
                            <p class="text-sm text-slate-500 dark:text-slate-500 mt-1">{{ __('Tech: PHP, REST APIs, Job Queues, Asynchronous Workers') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Challenge') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                {{ __('The platform processed large product data feeds for global retail integrations, but suffered from slow ingestion, blocking operations, and bugs that intermittently disrupted SLAs.') }}
                            </p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Solution') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-4">
                                {{ __('I rebuilt and optimized critical backend systems:') }}
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Refactored the feed ingestion engine') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Reduced memory usage and improved throughput') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Implemented asynchronous job queue architecture') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Added robust retry + recovery logic') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Improved error handling and operational visibility') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Delivered additional modules such as feedback and payment integrations') }}</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Results') }}</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg border border-green-200 dark:border-green-800">
                                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">+50%</div>
                                    <div class="text-sm text-green-700 dark:text-green-300">{{ __('Faster Feed Ingestion') }}</div>
                                </div>
                                <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg border border-green-200 dark:border-green-800">
                                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">{{ __('Stable') }}</div>
                                    <div class="text-sm text-green-700 dark:text-green-300">{{ __('Platform at Scale') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative lg:order-1">
                    <div class="bg-gradient-to-br from-red-600/10 to-slate-900/20 dark:from-red-600/20 dark:to-black/30 rounded-2xl p-8 border border-red-500/20">
                        <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-6">{{ __('Key Improvements') }}</h4>
                        <div class="space-y-4">
                            <div class="p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 bg-green-100 dark:bg-green-900/30 rounded flex items-center justify-center">
                                        <svg class="h-4 w-4 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-slate-900 dark:text-white">{{ __('50%+ Faster Ingestion') }}</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-400">{{ __('Optimized feed processing') }}</p>
                            </div>
                            <div class="p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 bg-green-100 dark:bg-green-900/30 rounded flex items-center justify-center">
                                        <svg class="h-4 w-4 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-slate-900 dark:text-white">{{ __('Predictable Processing') }}</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-400">{{ __('Async job queue architecture') }}</p>
                            </div>
                            <div class="p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 bg-green-100 dark:bg-green-900/30 rounded flex items-center justify-center">
                                        <svg class="h-4 w-4 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-slate-900 dark:text-white">{{ __('Improved SLAs') }}</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-400">{{ __('Enhanced customer satisfaction') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study 5: Lending Platform Modernization -->
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-full text-sm font-medium mb-6">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <span>{{ __('Case Study #5: Architecture') }}</span>
                    </div>
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-4">
                        {{ __('Lending Platform Modernization & Architecture Upgrade') }}
                    </h2>
                    <p class="text-lg text-slate-600 dark:text-slate-400 mb-6">
                        {{ __('Platform Migration, System Architecture, Engineering Processes') }}
                    </p>

                    <div class="space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Client') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400">{{ __('Financial Services') }}</p>
                            <p class="text-sm text-slate-500 dark:text-slate-500 mt-1">{{ __('Tech: .NET, PHP, Redis, CI/CD (Jenkins, Docker, Puppet)') }}</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Challenge') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                                {{ __('A national-scale lending platform operated a monolithic legacy system with weak development processes, difficult deployments, and a roadmap blocked by technical debt. The platform needed a migration plan to a modern architecture and a fully redefined engineering workflow.') }}
                            </p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Solution') }}</h3>
                            <p class="text-slate-600 dark:text-slate-400 leading-relaxed mb-4">
                                {{ __('I led the system redesign and platform modernization initiative:') }}
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Defined the full architecture for service decomposition') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Created domain boundaries and data flow diagrams') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Built transitional services enabling gradual migration') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Introduced CI/CD pipelines and standardized release processes') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Established documentation, coding practices, and cross-team workflows') }}</span>
                                </li>
                                <li class="flex items-start gap-2 text-slate-600 dark:text-slate-400">
                                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __('Integrated Redis for caching and performance improvements') }}</span>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Results') }}</h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg border border-green-200 dark:border-green-800">
                                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">{{ __('Modern') }}</div>
                                    <div class="text-sm text-green-700 dark:text-green-300">{{ __('Architecture') }}</div>
                                </div>
                                <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg border border-green-200 dark:border-green-800">
                                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">{{ __('Faster') }}</div>
                                    <div class="text-sm text-green-700 dark:text-green-300">{{ __('Feature Delivery') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-red-600/10 to-slate-900/20 dark:from-red-600/20 dark:to-black/30 rounded-2xl p-8 border border-red-500/20">
                        <h4 class="text-lg font-semibold text-slate-900 dark:text-white mb-6">{{ __('Transformation Outcomes') }}</h4>
                        <div class="space-y-4">
                            <div class="p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 bg-green-100 dark:bg-green-900/30 rounded flex items-center justify-center">
                                        <svg class="h-4 w-4 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-slate-900 dark:text-white">{{ __('Clear Migration Path') }}</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-400">{{ __('Scalable modern architecture') }}</p>
                            </div>
                            <div class="p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 bg-green-100 dark:bg-green-900/30 rounded flex items-center justify-center">
                                        <svg class="h-4 w-4 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-slate-900 dark:text-white">{{ __('Strong Engineering Processes') }}</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-400">{{ __('Company-wide adoption') }}</p>
                            </div>
                            <div class="p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 bg-green-100 dark:bg-green-900/30 rounded flex items-center justify-center">
                                        <svg class="h-4 w-4 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-slate-900 dark:text-white">{{ __('Reduced Deployment Failures') }}</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-400">{{ __('Improved reliability') }}</p>
                            </div>
                            <div class="p-4 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700">
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="w-8 h-8 bg-green-100 dark:bg-green-900/30 rounded flex items-center justify-center">
                                        <svg class="h-4 w-4 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <span class="font-medium text-slate-900 dark:text-white">{{ __('Increased Delivery Speed') }}</span>
                                </div>
                                <p class="text-sm text-slate-600 dark:text-slate-400">{{ __('Better performance & maintainability') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-16 sm:py-20 bg-gradient-to-br from-slate-900 via-slate-800 to-black dark:from-black dark:via-slate-950 dark:to-black overflow-hidden">
        <!-- Animated gradient orbs -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-red-600/20 rounded-full mix-blend-screen filter blur-3xl opacity-60 animate-blob"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-red-500/15 rounded-full mix-blend-screen filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
        </div>

        <!-- Grid pattern -->
        <div class="absolute inset-0 bg-grid-white/[0.02] bg-[size:30px_30px]"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-white sm:text-4xl">
                    {{ __('Ready to Build Your Platform?') }}
                </h2>
                <p class="mt-4 text-lg text-slate-300 max-w-2xl mx-auto">
                    {{ __('Let\'s discuss how we can help you build scalable payment systems and high-performance platforms.') }}
                </p>
                <div class="mt-8">
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-2.5 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-lg transition shadow-lg">
                        {{ __('Contact Us') }}
                        <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
