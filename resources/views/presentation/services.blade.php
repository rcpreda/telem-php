@extends('layouts.presentation')

@section('title', 'Our Services - Payment Systems, Backend Development & Cloud Solutions | ' . config('app.name'))
@section('description', 'Expert engineering services for payment systems, backend platforms, and scalable cloud architecture. Stripe integrations, ACH flows, microservices, CI/CD automation, and custom software development for fintech and SaaS companies.')
@section('keywords', 'payment integration services, backend development, cloud infrastructure, stripe consulting, ACH implementation, microservices architecture, Laravel development services, AWS cloud solutions, custom software development, fintech engineering')
@section('og_title', 'Our Services - Payment Systems, Backend Development & Cloud Solutions | ' . config('app.name'))
@section('twitter_title', 'Our Services - Payment Systems, Backend Development & Cloud Solutions | ' . config('app.name'))

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
                    {{ __('Our Services') }}
                </h1>
                <p class="mt-4 text-lg text-slate-300 max-w-3xl mx-auto">
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
