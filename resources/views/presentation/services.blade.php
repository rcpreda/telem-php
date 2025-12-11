@extends('layouts.presentation')

@section('title', 'Our Services - Payment Systems, Backend Development & Cloud Solutions | ' . config('app.name'))
@section('description', 'Expert engineering services for payment systems, backend platforms, and scalable cloud architecture. Stripe integrations, ACH flows, microservices, CI/CD automation, and custom software development for fintech and SaaS companies.')
@section('keywords', 'payment integration services, backend development, cloud infrastructure, stripe consulting, ACH implementation, microservices architecture, Laravel development services, AWS cloud solutions, custom software development, fintech engineering')
@section('og_title', 'Our Services - Payment Systems, Backend Development & Cloud Solutions | ' . config('app.name'))
@section('twitter_title', 'Our Services - Payment Systems, Backend Development & Cloud Solutions | ' . config('app.name'))

@section('content')
    <!-- Page Header -->
    <section class="relative bg-gray-950 dark:bg-black text-gray-100 py-20 sm:py-24 overflow-hidden">
        <!-- SVG Background Pattern (matching hero) -->
        <div class="absolute inset-0 opacity-35 pointer-events-none">
            <svg width="100%" height="100%" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="servicesGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#dc2626"/>
                        <stop offset="100%" stop-color="#ef4444"/>
                    </linearGradient>
                    <linearGradient id="servicesGrad2" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#f87171" stop-opacity="0.8"/>
                        <stop offset="100%" stop-color="#dc2626" stop-opacity="0.8"/>
                    </linearGradient>
                </defs>

                <g stroke="url(#servicesGrad1)" stroke-width="1.5" opacity="0.8">
                    <path d="M0 200 Q400 50 800 250 T1600 200 T2400 250 T3200 200" fill="none"/>
                    <path d="M0 400 Q500 200 900 380 T1600 350 T2400 380 T3200 350" fill="none"/>
                    <path d="M0 600 Q450 450 850 550 T1600 650 T2400 550 T3200 650" fill="none"/>
                    <path d="M0 100 Q350 150 700 80 T1400 120 T2200 80 T3000 120" fill="none"/>
                    <path d="M0 300 Q550 250 900 320 T1600 280 T2400 320 T3200 280" fill="none"/>
                    <path d="M0 500 Q400 400 800 480 T1600 520 T2400 480 T3200 520" fill="none"/>
                    <path d="M0 150 Q450 200 850 180 T1600 150 T2400 180 T3200 150" fill="none"/>
                    <path d="M0 450 Q500 500 950 420 T1700 450 T2500 420 T3200 450" fill="none"/>
                    <path d="M100 0 Q200 300 300 600 T300 1200" fill="none"/>
                    <path d="M400 0 Q500 350 600 700 T600 1400" fill="none"/>
                    <path d="M700 0 Q800 300 900 600 T900 1200" fill="none"/>
                    <path d="M1000 0 Q1100 350 1200 700 T1200 1400" fill="none"/>
                    <path d="M1300 0 Q1400 300 1500 600 T1500 1200" fill="none"/>
                    <path d="M1600 0 Q1700 400 1800 800 T1800 1600" fill="none"/>
                    <path d="M1900 0 Q2000 350 2100 700 T2100 1400" fill="none"/>
                    <path d="M2200 0 Q2300 300 2400 600 T2400 1200" fill="none"/>
                    <path d="M2500 0 Q2600 450 2700 900 T2700 1800" fill="none"/>
                    <path d="M2800 0 Q2900 350 3000 700 T3000 1400" fill="none"/>
                </g>

                <g fill="url(#servicesGrad2)">
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

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">
                    {{ __('Our Services') }}
                </h1>
                <p class="mt-4 text-lg text-gray-300 max-w-3xl mx-auto">
                    {{ __('Expert engineering services for payment systems, backend platforms, and scalable cloud architecture') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-24 sm:py-32 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Service 1: Payments & Fintech Engineering -->
                <div class="group bg-white dark:bg-slate-800 p-10 rounded-2xl shadow-lg hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-red-500/50">
                    <div class="inline-flex items-center gap-3 mb-6">
                        <div class="flex items-center justify-center w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg">
                            <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-semibold text-red-600 dark:text-red-400 uppercase tracking-wide">01</div>
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">
                                {{ __('Payments & Fintech Engineering') }}
                            </h3>
                        </div>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed">
                        {{ __('We architect and implement complex financial workflows:') }}
                    </p>
                    <ul class="space-y-2.5 mb-6">
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Stripe Billing, Direct & Connect') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('ACH debit/credit flows') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Subscription lifecycles') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Split payments / marketplaces') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Webhook orchestration (idempotency, retries)') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('PCI-aligned data handling') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Migration from legacy billing providers') }}
                        </li>
                    </ul>
                    <div class="text-sm text-slate-500 dark:text-slate-400 italic">
                        {{ __('Ideal for: SaaS, fintech, marketplaces, financial apps') }}
                    </div>
                </div>

                <!-- Service 2: Backend & Platform Engineering -->
                <div class="group bg-white dark:bg-slate-800 p-10 rounded-2xl shadow-lg hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-red-500/50">
                    <div class="inline-flex items-center gap-3 mb-6">
                        <div class="flex items-center justify-center w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg">
                            <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-semibold text-red-600 dark:text-red-400 uppercase tracking-wide">02</div>
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">
                                {{ __('Backend & Platform Engineering') }}
                            </h3>
                        </div>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed">
                        {{ __('We design scalable backend systems using modern engineering practices:') }}
                    </p>
                    <ul class="space-y-2.5 mb-6">
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('PHP 8 / Laravel / Symfony') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Redis queues & event-driven workflows') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Microservices & modular architecture') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Optimized SQL schema design') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('High-performance APIs') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Large data processing & exports') }}
                        </li>
                    </ul>
                    <div class="text-sm text-slate-500 dark:text-slate-400 italic">
                        {{ __('Ideal for: platforms under heavy load or needing modernization') }}
                    </div>
                </div>

                <!-- Service 3: Cloud & Infrastructure Architecture -->
                <div class="group bg-white dark:bg-slate-800 p-10 rounded-2xl shadow-lg hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-red-500/50">
                    <div class="inline-flex items-center gap-3 mb-6">
                        <div class="flex items-center justify-center w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg">
                            <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-semibold text-red-600 dark:text-red-400 uppercase tracking-wide">03</div>
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">
                                {{ __('Cloud & Infrastructure') }}
                            </h3>
                        </div>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed">
                        {{ __('We build predictable, cost-effective environments:') }}
                    </p>
                    <ul class="space-y-2.5 mb-6">
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('AWS ECS/EC2/RDS/S3') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Dockerized pipelines') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('CI/CD automation') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Observability: Datadog, Sentry, CloudWatch') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('High-availability setups') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Infrastructure hardening') }}
                        </li>
                    </ul>
                    <div class="text-sm text-slate-500 dark:text-slate-400 italic">
                        {{ __('Ideal for: scaling platforms, reducing downtime, reliability') }}
                    </div>
                </div>

                <!-- Service 4: Custom Software Development -->
                <div class="group bg-white dark:bg-slate-800 p-10 rounded-2xl shadow-lg hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-red-500/50">
                    <div class="inline-flex items-center gap-3 mb-6">
                        <div class="flex items-center justify-center w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg">
                            <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs font-semibold text-red-600 dark:text-red-400 uppercase tracking-wide">04</div>
                            <h3 class="text-2xl font-bold text-slate-900 dark:text-white">
                                {{ __('Custom Software Development') }}
                            </h3>
                        </div>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed">
                        {{ __('From concept to launch:') }}
                    </p>
                    <ul class="space-y-2.5 mb-6">
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Custom admin dashboards') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Customer onboarding flows') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Multi-tenant applications') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('API integrations (banking, CRM, ERP)') }}
                        </li>
                        <li class="flex items-start text-sm text-slate-600 dark:text-slate-300">
                            <span class="text-red-600 dark:text-red-400 mr-2">•</span>
                            {{ __('Workflow automation') }}
                        </li>
                    </ul>
                    <div class="text-sm text-slate-500 dark:text-slate-400 italic">
                        {{ __('Ideal for: long-term, maintainable systems') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-presentation.clients />

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
                    {{ __('Need a Custom Solution?') }}
                </h2>
                <p class="mt-4 text-lg text-slate-300 max-w-2xl mx-auto">
                    {{ __('We can tailor our services to meet your specific requirements. Get in touch with us to discuss your project.') }}
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
