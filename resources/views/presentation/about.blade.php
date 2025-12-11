@extends('layouts.presentation')

@section('title', 'About Us - Senior Backend Engineering & Fintech Expertise | ' . config('app.name'))
@section('description', 'Meet our team of senior backend engineers specializing in payment systems, fintech integrations, and scalable cloud architectures. 15+ years of experience in financial services, SaaS platforms, and enterprise systems.')
@section('keywords', 'backend engineer, fintech expert, payment systems architect, senior developer, PHP expert, Laravel specialist, cloud architecture, distributed systems, financial services, SaaS development')
@section('og_title', 'About Us - Senior Backend Engineering & Fintech Expertise | ' . config('app.name'))
@section('twitter_title', 'About Us - Senior Backend Engineering & Fintech Expertise | ' . config('app.name'))

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
                    {{ __('About') }} {{ config('app.name') }}
                </h1>
                <p class="mt-4 text-lg text-slate-300 max-w-3xl mx-auto">
                    {{ __('A senior engineering-driven software studio focused on high-performance backend systems, fintech integrations, and scalable cloud architectures.') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Founder Section -->
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-start">
                <div class="lg:col-span-2">
                    <div class="sticky top-8">
                        <div class="bg-gradient-to-br from-red-600/10 to-slate-900/20 dark:from-red-600/20 dark:to-black/30 rounded-2xl p-8 border border-red-500/20">
                            <div class="text-center mb-6">
                                <div class="inline-flex items-center justify-center w-24 h-24 bg-red-100 dark:bg-red-900/30 rounded-full mb-4">
                                    <svg class="h-12 w-12 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Razvan</h3>
                                <p class="text-red-600 dark:text-red-400 font-medium">{{ __('Founder & Senior Engineer') }}</p>
                            </div>
                            <div class="text-sm text-slate-600 dark:text-slate-400 space-y-2">
                                <p class="font-semibold text-slate-900 dark:text-white">{{ __('15+ years experience in:') }}</p>
                                <ul class="space-y-1 ml-4">
                                    <li>• {{ __('Financial services') }}</li>
                                    <li>• {{ __('SaaS platforms') }}</li>
                                    <li>• {{ __('Enterprise systems') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-3 space-y-6 text-slate-600 dark:text-slate-300 text-lg leading-relaxed">
                    <p>
                        {{ __('We are a senior engineering-driven software studio focused on high-performance backend systems, fintech integrations, and scalable cloud architectures.') }}
                    </p>
                    <p>
                        {{ __('Founded by Razvan, a Senior Backend/Platform Engineer with 15+ years of experience in financial services, SaaS platforms, and enterprise systems.') }}
                    </p>
                    <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-6 border border-slate-200 dark:border-slate-700">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">{{ __('Our Philosophy') }}</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <span class="text-red-600 dark:text-red-400 mt-1 flex-shrink-0">✓</span>
                                <span>{{ __('Build systems that don\'t break.') }}</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-red-600 dark:text-red-400 mt-1 flex-shrink-0">✓</span>
                                <span>{{ __('Design architectures that scale.') }}</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-red-600 dark:text-red-400 mt-1 flex-shrink-0">✓</span>
                                <span>{{ __('Deliver software that lasts.') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Highlights Section -->
    <section class="relative py-14 sm:py-18 bg-gradient-to-br from-slate-50 via-white to-slate-100 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-4">
                    {{ __('Expertise Highlights') }}
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-slate-800 p-8 rounded-xl border border-slate-200 dark:border-slate-700">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg mb-4">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">
                        {{ __('Payment orchestration') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        {{ __('Stripe, ACH, Connect') }}
                    </p>
                </div>

                <div class="bg-white dark:bg-slate-800 p-8 rounded-xl border border-slate-200 dark:border-slate-700">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg mb-4">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">
                        {{ __('Backend architecture') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        {{ __('Distributed systems') }}
                    </p>
                </div>

                <div class="bg-white dark:bg-slate-800 p-8 rounded-xl border border-slate-200 dark:border-slate-700">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg mb-4">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">
                        {{ __('API platforms') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        {{ __('Finance & insurance') }}
                    </p>
                </div>

                <div class="bg-white dark:bg-slate-800 p-8 rounded-xl border border-slate-200 dark:border-slate-700">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg mb-4">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">
                        {{ __('Cloud-native solutions') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        {{ __('AWS') }}
                    </p>
                </div>

                <div class="bg-white dark:bg-slate-800 p-8 rounded-xl border border-slate-200 dark:border-slate-700">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg mb-4">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">
                        {{ __('High-availability platforms') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        {{ __('Platform engineering') }}
                    </p>
                </div>

                <div class="bg-white dark:bg-slate-800 p-8 rounded-xl border border-slate-200 dark:border-slate-700">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-red-100 dark:bg-red-900/30 rounded-lg mb-4">
                        <svg class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">
                        {{ __('Digital transformations') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        {{ __('Legacy modernization') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Work With Section -->
    <section class="py-16 sm:py-20 bg-slate-50 dark:bg-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-slate-900 dark:text-white">
                    {{ __('Who We Work With') }}
                </h2>
                <p class="mt-4 text-lg text-slate-600 dark:text-slate-400">
                    {{ __('We partner with forward-thinking companies building the future') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- SaaS Companies -->
                <div class="group relative p-8 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-14 h-14 bg-red-100 dark:bg-red-900/30 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="h-7 w-7 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">
                                {{ __('SaaS Companies') }}
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                {{ __('Subscription platforms needing billing infrastructure, payment orchestration, and scalable backend systems') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fintech & Insurtech -->
                <div class="group relative p-8 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-14 h-14 bg-red-100 dark:bg-red-900/30 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="h-7 w-7 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">
                                {{ __('Fintech & Insurtech') }}
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                {{ __('Financial services requiring PCI compliance, ACH flows, secure processing, and regulatory standards') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Enterprise Platforms -->
                <div class="group relative p-8 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-14 h-14 bg-red-100 dark:bg-red-900/30 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="h-7 w-7 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">
                                {{ __('Enterprise Platforms') }}
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                {{ __('Large-scale systems handling high volume, complex integrations, and mission-critical operations') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Growth-Stage Startups -->
                <div class="group relative p-8 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50 transition-all hover:shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-14 h-14 bg-red-100 dark:bg-red-900/30 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="h-7 w-7 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">
                                {{ __('Growth-Stage Startups') }}
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                {{ __('Fast-growing companies needing to scale infrastructure, modernize legacy code, and build for the next phase') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-presentation.clients />
@endsection
