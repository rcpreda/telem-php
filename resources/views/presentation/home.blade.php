@extends('layouts.presentation')

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
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-20 sm:py-24">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">
                    {{ __('Welcome to') }} <span class="text-red-500">{{ config('app.name') }}</span>
                </h1>
                <p class="mt-4 text-lg leading-7 text-slate-300 max-w-2xl mx-auto">
                    {{ __('Transform your business with our innovative solutions. We provide cutting-edge technology and exceptional service to help you succeed.') }}
                </p>
                <div class="mt-8 flex items-center justify-center gap-3">
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-2.5 bg-red-600 hover:bg-red-700 text-white font-medium text-sm rounded-lg transition shadow-lg">
                        {{ __('Get Started') }}
                        <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center px-6 py-2.5 bg-transparent hover:bg-white/10 text-white font-medium text-sm rounded-lg border-2 border-red-500/50 hover:border-red-500 transition">
                        {{ __('Learn More') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 sm:py-32 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-5xl">
                    {{ __('Why Choose Us') }}
                </h2>
                <p class="mt-6 text-xl text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                    {{ __('We deliver excellence through our core values and expertise') }}
                </p>
            </div>

            <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Feature 1 - AI Powered -->
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-red-100 to-red-200 dark:from-red-900/40 dark:to-red-800/30 rounded-full mb-6 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-red-500/20 to-transparent animate-pulse"></div>
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400 relative z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">
                        {{ __('AI-Powered Development') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        {{ __('Leveraging cutting-edge artificial intelligence to accelerate development, optimize code quality, and deliver smarter solutions that evolve with your business needs.') }}
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full mb-6">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">
                        {{ __('Fast & Reliable') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        {{ __('Lightning-fast performance with 99.9% uptime guarantee. Your business never sleeps, and neither do we.') }}
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full mb-6">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">
                        {{ __('Secure & Private') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        {{ __('Enterprise-grade security with end-to-end encryption. Your data is protected with military-grade encryption.') }}
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full mb-6">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">
                        {{ __('Fully Customizable') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        {{ __('Tailor every aspect to your needs. Our flexible platform adapts to your unique business requirements.') }}
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full mb-6">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">
                        {{ __('24/7 Support') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        {{ __('Round-the-clock customer support from our expert team. We are here whenever you need us.') }}
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-full mb-6">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4">
                        {{ __('Analytics Dashboard') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                        {{ __('Powerful insights with real-time analytics. Make data-driven decisions with our comprehensive dashboard.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Excel to Cloud Transformation Section -->
    <section class="relative py-24 sm:py-32 bg-gradient-to-br from-slate-50 via-white to-slate-100 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900 overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0 opacity-20">
            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="excel-pattern" x="0" y="0" width="80" height="80" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="40" height="40" fill="rgba(239, 68, 68, 0.1)"/>
                        <rect x="40" y="40" width="40" height="40" fill="rgba(239, 68, 68, 0.1)"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#excel-pattern)"/>
            </svg>
        </div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left side - Text content -->
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 rounded-full text-sm font-medium mb-6">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span>{{ __('Digital Transformation') }}</span>
                    </div>

                    <h2 class="text-4xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-5xl mb-6">
                        {{ __('Transform Your Excel Spreadsheets Into Powerful Cloud Solutions') }}
                    </h2>

                    <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed mb-8">
                        {{ __('Stop managing your business with outdated spreadsheets. We transform your Excel files into modern, scalable cloud applications with real-time collaboration, automated workflows, and intelligent insights.') }}
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mt-1">
                                <svg class="h-4 w-4 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Real-Time Collaboration') }}</h3>
                                <p class="text-slate-600 dark:text-slate-400">{{ __('Multiple users, instant updates, no version conflicts') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mt-1">
                                <svg class="h-4 w-4 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Automated Workflows') }}</h3>
                                <p class="text-slate-600 dark:text-slate-400">{{ __('Eliminate manual tasks and reduce human errors') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mt-1">
                                <svg class="h-4 w-4 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Advanced Security') }}</h3>
                                <p class="text-slate-600 dark:text-slate-400">{{ __('Role-based access, audit logs, and encrypted data') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-6 h-6 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center mt-1">
                                <svg class="h-4 w-4 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900 dark:text-white">{{ __('Smart Analytics') }}</h3>
                                <p class="text-slate-600 dark:text-slate-400">{{ __('AI-powered insights and predictive analytics') }}</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-medium text-base rounded-lg transition shadow-lg">
                        {{ __('Transform Your Excel Today') }}
                        <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>

                <!-- Right side - Visual representation -->
                <div class="relative">
                    <div class="relative bg-white dark:bg-slate-800 rounded-2xl shadow-2xl p-8 border border-slate-200 dark:border-slate-700">
                        <!-- Excel icon with transformation arrow -->
                        <div class="flex items-center justify-center gap-6 mb-8">
                            <!-- Excel -->
                            <div class="text-center">
                                <div class="w-20 h-20 bg-green-100 dark:bg-green-900/30 rounded-xl flex items-center justify-center mb-3">
                                    <svg class="h-12 w-12 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/>
                                        <path d="M14 2v6h6M9.5 13.5l3 3M12.5 13.5l-3 3M8 13h8M8 17h8"/>
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-slate-600 dark:text-slate-400">Excel / CSV</span>
                            </div>

                            <!-- Arrow -->
                            <div class="text-red-600 dark:text-red-400 animate-pulse">
                                <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </div>

                            <!-- Cloud App -->
                            <div class="text-center">
                                <div class="w-20 h-20 bg-red-100 dark:bg-red-900/30 rounded-xl flex items-center justify-center mb-3">
                                    <svg class="h-12 w-12 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-slate-600 dark:text-slate-400">{{ __('Cloud Solution') }}</span>
                            </div>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-4 pt-6 border-t border-slate-200 dark:border-slate-700">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-red-600 dark:text-red-400">10x</div>
                                <div class="text-xs text-slate-600 dark:text-slate-400">{{ __('Faster') }}</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-red-600 dark:text-red-400">99.9%</div>
                                <div class="text-xs text-slate-600 dark:text-slate-400">{{ __('Uptime') }}</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-red-600 dark:text-red-400">100%</div>
                                <div class="text-xs text-slate-600 dark:text-slate-400">{{ __('Secure') }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating elements for visual interest -->
                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-red-500/10 dark:bg-red-500/20 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-red-600/10 dark:bg-red-600/20 rounded-full blur-2xl"></div>
                </div>
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
