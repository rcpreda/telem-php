@extends('layouts.presentation')

@section('title', 'Scalable Payment Systems & Backend Engineering | ' . config('app.name'))
@section('description', 'Expert backend engineering and payment system development for fintech, SaaS, and enterprise platforms. Specializing in Stripe integrations, subscription systems, payment orchestration, and cloud architecture.')
@section('keywords', 'payment systems, backend engineering, fintech development, stripe integration, subscription billing, payment orchestration, laravel development, PHP 8, microservices, cloud architecture, AWS, fintech consulting')
@section('og_title', 'Scalable Payment Systems & Backend Engineering | ' . config('app.name'))
@section('twitter_title', 'Scalable Payment Systems & Backend Engineering | ' . config('app.name'))

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gray-950 dark:bg-black text-gray-100 py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-35 pointer-events-none">
            <svg width="100%" height="100%" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#dc2626"/>
                        <stop offset="100%" stop-color="#ef4444"/>
                    </linearGradient>
                    <linearGradient id="grad2" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#f87171" stop-opacity="0.8"/>
                        <stop offset="100%" stop-color="#dc2626" stop-opacity="0.8"/>
                    </linearGradient>
                </defs>

                <g stroke="url(#grad1)" stroke-width="1.5" opacity="0.8">
                    <path d="M0 200 Q400 50 800 250 T1600 200 T2400 250 T3200 200" fill="none"/>
                    <path d="M0 400 Q500 200 900 380 T1600 350 T2400 400 T3200 380" fill="none"/>
                    <path d="M0 600 Q450 450 850 550 T1600 650 T2400 600 T3200 650" fill="none"/>
                    <path d="M0 100 Q350 150 700 80 T1400 120 T2200 100 T3000 150" fill="none"/>
                    <path d="M0 300 Q550 250 900 320 T1600 280 T2400 320 T3200 300" fill="none"/>
                    <path d="M0 500 Q400 400 800 480 T1600 520 T2400 500 T3200 480" fill="none"/>
                    <path d="M100 0 Q200 300 300 600 Q400 900 500 1200" fill="none"/>
                    <path d="M400 0 Q500 350 600 700 Q700 1050 800 1400" fill="none"/>
                    <path d="M700 0 Q800 300 900 600 Q1000 900 1100 1200" fill="none"/>
                    <path d="M1000 0 Q1100 350 1200 700 Q1300 1050 1400 1400" fill="none"/>
                    <path d="M1300 0 Q1400 300 1500 600 Q1600 900 1700 1200" fill="none"/>
                    <path d="M1600 0 Q1700 300 1800 600 Q1900 900 2000 1200" fill="none"/>
                    <path d="M1900 0 Q2000 350 2100 700 Q2200 1050 2300 1400" fill="none"/>
                    <path d="M2200 0 Q2300 300 2400 600 Q2500 900 2600 1200" fill="none"/>
                    <path d="M2500 0 Q2600 350 2700 700 Q2800 1050 2900 1400" fill="none"/>
                </g>

                <g fill="url(#grad2)">
                    <circle cx="200" cy="250" r="6"/>
                    <circle cx="600" cy="150" r="8"/>
                    <circle cx="1000" cy="300" r="5"/>
                    <circle cx="1400" cy="220" r="7"/>
                    <circle cx="300" cy="480" r="5"/>
                    <circle cx="900" cy="520" r="7"/>
                    <circle cx="1300" cy="600" r="6"/>
                    <circle cx="400" cy="100" r="5"/>
                    <circle cx="700" cy="350" r="6"/>
                    <circle cx="1100" cy="450" r="7"/>
                    <circle cx="500" cy="280" r="5"/>
                    <circle cx="800" cy="180" r="6"/>
                    <circle cx="1200" cy="380" r="5"/>
                    <circle cx="1700" cy="250" r="6"/>
                    <circle cx="2000" cy="400" r="7"/>
                    <circle cx="2300" cy="180" r="5"/>
                    <circle cx="2600" cy="320" r="6"/>
                    <circle cx="2900" cy="500" r="7"/>
                </g>
            </svg>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                {{ __('Payments, Subscriptions & Platform Engineering') }}<br>
                <span class="text-red-500 dark:text-red-400">{{ __('for SaaS and Fintech') }}</span>
            </h1>

            <p class="mt-6 text-lg text-gray-300 max-w-3xl leading-relaxed">
                {{ __('We build scalable payment systems, subscription engines, and Stripe-based infrastructures. Mission-critical software engineered for reliability, compliance, and long-term growth.') }}
            </p>

            <div class="mt-10 flex flex-wrap gap-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 rounded-lg text-sm font-semibold bg-red-600 hover:bg-red-700 transition">
                    {{ __('Start Your Project') }}
                    <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </a>
                <a href="{{ route('case-studies') }}" class="inline-flex items-center px-6 py-3 rounded-lg text-sm font-semibold border border-gray-500 hover:border-red-500 hover:text-red-400 transition">
                    {{ __('View Case Studies') }}
                    <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Trust Strip -->
    <section class="py-12 bg-gray-900 dark:bg-slate-900 border-t border-gray-800 dark:border-slate-700">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-gray-400 dark:text-slate-400 uppercase text-sm tracking-wide">{{ __('Trusted for mission-critical systems in') }}</p>
            <div class="flex justify-center gap-12 mt-4 text-gray-300 dark:text-slate-300 text-lg flex-wrap">
                <span>{{ __('Fintech') }}</span>
                <span>{{ __('Insurance') }}</span>
                <span>{{ __('SaaS') }}</span>
                <span>{{ __('E-Commerce') }}</span>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="py-24 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-12 text-slate-900 dark:text-white">{{ __('What We Build') }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="p-8 bg-slate-50 dark:bg-gray-900 rounded-xl border border-slate-200 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 transition">
                    <div class="flex items-center gap-3 mb-4">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <h3 class="text-2xl font-bold text-red-600 dark:text-red-400">{{ __('Payment Systems') }}</h3>
                    </div>
                    <p class="text-slate-600 dark:text-gray-300 leading-relaxed">
                        {{ __('Stripe Billing, ACH, Connect, payouts, reconciliation pipelines, webhook engines and end-to-end payment orchestration for regulated industries.') }}
                    </p>
                </div>

                <div class="p-8 bg-slate-50 dark:bg-gray-900 rounded-xl border border-slate-200 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 transition">
                    <div class="flex items-center gap-3 mb-4">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        <h3 class="text-2xl font-bold text-red-600 dark:text-red-400">{{ __('Subscription Platforms') }}</h3>
                    </div>
                    <p class="text-slate-600 dark:text-gray-300 leading-relaxed">
                        {{ __('Tiered pricing, metered billing, dunning strategies, customer dashboards, admin portals, and enterprise-grade subscription lifecycle automation.') }}
                    </p>
                </div>

                <div class="p-8 bg-slate-50 dark:bg-gray-900 rounded-xl border border-slate-200 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 transition">
                    <div class="flex items-center gap-3 mb-4">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                        </svg>
                        <h3 class="text-2xl font-bold text-red-600 dark:text-red-400">{{ __('Backend & Cloud Engineering') }}</h3>
                    </div>
                    <p class="text-slate-600 dark:text-gray-300 leading-relaxed">
                        {{ __('Distributed systems, API architecture, microservices, Redis queues, AWS ECS/RDS/S3, high-performance processing and fault-tolerant platforms.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Preview -->
    <section class="py-24 bg-gray-900 dark:bg-slate-900 border-t border-gray-800 dark:border-slate-700">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-12 text-white">{{ __('Case Studies') }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="p-8 bg-gray-800 dark:bg-slate-800 rounded-xl hover:border-red-500 border border-gray-700 dark:border-slate-700 transition">
                    <div class="flex items-center gap-3 mb-3">
                        <svg class="h-8 w-8 text-red-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">{{ __('Stripe Migration & Payment Orchestration') }}</h3>
                    </div>
                    <p class="text-gray-400 dark:text-slate-400 leading-relaxed">
                        {{ __('Complete billing migration, ACH onboarding, webhook reliability patterns and reconciliation automation for a financial services platform.') }}
                    </p>
                    <a href="{{ route('case-studies') }}" class="text-red-400 font-semibold mt-4 inline-block hover:text-red-300 transition">{{ __('Read More') }} →</a>
                </div>

                <div class="p-8 bg-gray-800 dark:bg-slate-800 rounded-xl hover:border-red-500 border border-gray-700 dark:border-slate-700 transition">
                    <div class="flex items-center gap-3 mb-3">
                        <svg class="h-8 w-8 text-red-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">{{ __('Inventory Platform for Multi-Store Retail') }}</h3>
                    </div>
                    <p class="text-gray-400 dark:text-slate-400 leading-relaxed">
                        {{ __('Real-time sync engine, conflict resolution algorithms and event-driven architecture enabling thousands of SKU updates instantly.') }}
                    </p>
                    <a href="{{ route('case-studies') }}" class="text-red-400 font-semibold mt-4 inline-block hover:text-red-300 transition">{{ __('Read More') }} →</a>
                </div>

                <div class="p-8 bg-gray-800 dark:bg-slate-800 rounded-xl hover:border-red-500 border border-gray-700 dark:border-slate-700 transition">
                    <div class="flex items-center gap-3 mb-3">
                        <svg class="h-8 w-8 text-red-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 class="text-xl font-bold text-white">{{ __('Insurance Policy Management System') }}</h3>
                    </div>
                    <p class="text-gray-400 dark:text-slate-400 leading-relaxed">
                        {{ __('Microservices, lifecycle automation, customer portals and secure policy workflows handling thousands of clients.') }}
                    </p>
                    <a href="{{ route('case-studies') }}" class="text-red-400 font-semibold mt-4 inline-block hover:text-red-300 transition">{{ __('Read More') }} →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="py-24 bg-white dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-4 text-center text-slate-900 dark:text-white">{{ __('Tech Expertise') }}</h2>
            <p class="text-center text-slate-600 dark:text-gray-400 mb-12 max-w-2xl mx-auto">
                {{ __('Modern technologies powering enterprise-grade solutions') }}
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Backend & Languages -->
                <div class="p-6 bg-slate-50 dark:bg-gray-900 rounded-xl border border-slate-200 dark:border-gray-800">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">{{ __('Backend & Languages') }}</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">PHP 8+</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Laravel</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Node.js</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">REST APIs</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">GraphQL</span>
                    </div>
                </div>

                <!-- Database & Caching -->
                <div class="p-6 bg-slate-50 dark:bg-gray-900 rounded-xl border border-slate-200 dark:border-gray-800">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                        </svg>
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">{{ __('Database & Caching') }}</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">MySQL</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">PostgreSQL</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Redis</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Elasticsearch</span>
                    </div>
                </div>

                <!-- Cloud & DevOps -->
                <div class="p-6 bg-slate-50 dark:bg-gray-900 rounded-xl border border-slate-200 dark:border-gray-800">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">{{ __('Cloud & DevOps') }}</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">AWS</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Docker</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Kubernetes</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">CI/CD</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Terraform</span>
                    </div>
                </div>

                <!-- Payment & Integration -->
                <div class="p-6 bg-slate-50 dark:bg-gray-900 rounded-xl border border-slate-200 dark:border-gray-800">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">{{ __('Payment & Integration') }}</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Stripe</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Webhooks</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">OAuth</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Third-party APIs</span>
                    </div>
                </div>

                <!-- Architecture -->
                <div class="p-6 bg-slate-50 dark:bg-gray-900 rounded-xl border border-slate-200 dark:border-gray-800">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">{{ __('Architecture') }}</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Microservices</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Event-Driven</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">CQRS</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Domain-Driven Design</span>
                    </div>
                </div>

                <!-- Testing & Quality -->
                <div class="p-6 bg-slate-50 dark:bg-gray-900 rounded-xl border border-slate-200 dark:border-gray-800">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">{{ __('Testing & Quality') }}</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">PHPUnit</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Pest</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">TDD</span>
                        <span class="px-3 py-1.5 bg-white dark:bg-gray-800 text-slate-700 dark:text-gray-300 rounded-lg text-sm font-medium border border-slate-200 dark:border-gray-700 hover:border-red-400 dark:hover:border-red-400 transition">Code Review</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 bg-gradient-to-br from-slate-900 via-slate-800 to-black dark:from-black dark:via-slate-950 dark:to-black text-white text-center">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-4xl font-extrabold mb-6">{{ __('Let\'s Build Something That Scales') }}</h2>
            <p class="text-xl mb-10 text-slate-300">
                {{ __('Whether you\'re launching a new platform, migrating payments, or modernizing your architecture, we engineer solutions built for longevity and performance.') }}
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-2.5 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-lg transition shadow-lg">
                {{ __('Contact Us') }}
                <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </section>

    <x-presentation.clients />
@endsection
