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
                    {{ __('Our Services') }}
                </h1>
                <p class="mt-4 text-lg text-slate-300 max-w-2xl mx-auto">
                    {{ __('Comprehensive solutions tailored to your business needs') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-24 sm:py-32 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Service 1 -->
                <div class="group bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50">
                    <div class="flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-xl mb-6 group-hover:scale-110 transition-transform">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('Web Development') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">
                        {{ __('Custom web applications built with modern technologies. From simple websites to complex enterprise solutions.') }}
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Responsive Design') }}
                        </li>
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Modern Frameworks') }}
                        </li>
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('SEO Optimized') }}
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="group bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50">
                    <div class="flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-xl mb-6 group-hover:scale-110 transition-transform">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('Mobile Development') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">
                        {{ __('Native and cross-platform mobile apps for iOS and Android. Beautiful, fast, and user-friendly applications.') }}
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('iOS & Android') }}
                        </li>
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Cross-Platform') }}
                        </li>
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('App Store Deployment') }}
                        </li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="group bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50">
                    <div class="flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-xl mb-6 group-hover:scale-110 transition-transform">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('Cloud Solutions') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">
                        {{ __('Scalable cloud infrastructure and migration services. Maximize performance while minimizing costs.') }}
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Cloud Migration') }}
                        </li>
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Infrastructure Setup') }}
                        </li>
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('24/7 Monitoring') }}
                        </li>
                    </ul>
                </div>

                <!-- Service 4 -->
                <div class="group bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50">
                    <div class="flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-xl mb-6 group-hover:scale-110 transition-transform">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('Consulting') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">
                        {{ __('Expert guidance to help you make the right technology decisions. Strategic planning and implementation support.') }}
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Technology Strategy') }}
                        </li>
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Digital Transformation') }}
                        </li>
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Process Optimization') }}
                        </li>
                    </ul>
                </div>

                <!-- Service 5 -->
                <div class="group bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50">
                    <div class="flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-xl mb-6 group-hover:scale-110 transition-transform">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('Data Analytics') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">
                        {{ __('Transform your data into actionable insights. Advanced analytics and business intelligence solutions.') }}
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Data Visualization') }}
                        </li>
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Predictive Analytics') }}
                        </li>
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Custom Dashboards') }}
                        </li>
                    </ul>
                </div>

                <!-- Service 6 -->
                <div class="group bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all border border-slate-200 dark:border-slate-700 hover:border-red-500/50 dark:hover:border-red-500/50">
                    <div class="flex items-center justify-center w-16 h-16 bg-red-100 dark:bg-red-900/30 rounded-xl mb-6 group-hover:scale-110 transition-transform">
                        <svg class="h-8 w-8 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        {{ __('Security Services') }}
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-6 leading-relaxed">
                        {{ __('Protect your business with enterprise-grade security solutions. Comprehensive security audits and implementation.') }}
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Security Audits') }}
                        </li>
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Penetration Testing') }}
                        </li>
                        <li class="flex items-center text-sm text-slate-600 dark:text-slate-300">
                            <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ __('Compliance Management') }}
                        </li>
                    </ul>
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
