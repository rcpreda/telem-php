@extends('layouts.presentation')

@section('title', 'Cookie Policy | ' . config('app.name'))
@section('description', 'Cookie Policy for ' . config('app.name') . '. Learn about how we use cookies and similar tracking technologies.')
@section('keywords', 'cookie policy, cookies, tracking technologies, privacy, data protection')
@section('og_title', 'Cookie Policy | ' . config('app.name'))
@section('twitter_title', 'Cookie Policy | ' . config('app.name'))

@section('content')
    <!-- Page Header -->
    <section class="relative bg-gray-950 dark:bg-black text-gray-100 py-20 sm:py-24 overflow-hidden">
        <!-- SVG Background Pattern (matching hero) -->
        <div class="absolute inset-0 opacity-35 pointer-events-none">
            <svg width="100%" height="100%" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="cookieGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#dc2626"/>
                        <stop offset="100%" stop-color="#ef4444"/>
                    </linearGradient>
                    <linearGradient id="cookieGrad2" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#f87171" stop-opacity="0.8"/>
                        <stop offset="100%" stop-color="#dc2626" stop-opacity="0.8"/>
                    </linearGradient>
                </defs>

                <g stroke="url(#cookieGrad1)" stroke-width="1.5" opacity="0.8">
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

                <g fill="url(#cookieGrad2)">
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
                    {{ __('Cookie Policy') }}
                </h1>
                <p class="mt-4 text-lg text-gray-300 max-w-2xl mx-auto">
                    {{ __('Last updated: December 2025') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Cookie Policy Content -->
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="prose prose-slate dark:prose-invert max-w-none">
                <p class="text-lg text-slate-600 dark:text-slate-400 mb-8">
                    {{ __('Effective date: December 2025') }}
                </p>

                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('This Cookie Policy explains how') }} {{ config('app.name') }} {{ __('("we", "us", or "our") uses cookies and similar tracking technologies when you visit our website') }} <a href="{{ url('/') }}" class="text-red-600 hover:text-red-700">{{ url('/') }}</a> {{ __('. This policy should be read together with our') }} <a href="{{ route('privacy-policy') }}" class="text-red-600 hover:text-red-700">{{ __('Privacy Policy') }}</a>.
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('1. What Are Cookies?') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('Cookies are small text files that are placed on your device (computer, smartphone, or tablet) when you visit a website. They are widely used to make websites work more efficiently and provide information to website owners.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('2. How We Use Cookies') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('We use cookies and similar tracking technologies for the following purposes:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li>{{ __('To enable certain functions of the Site') }}</li>
                    <li>{{ __('To provide analytics and track Site usage') }}</li>
                    <li>{{ __('To store your preferences and settings') }}</li>
                    <li>{{ __('To personalize your experience') }}</li>
                    <li>{{ __('To deliver relevant advertising (if applicable)') }}</li>
                    <li>{{ __('To improve Site performance and security') }}</li>
                </ul>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('3. Types of Cookies We Use') }}</h2>

                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('3.1 Essential Cookies') }}</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('These cookies are necessary for the Site to function properly. They enable basic functions like page navigation, access to secure areas, and authentication. The Site cannot function properly without these cookies.') }}
                </p>

                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('3.2 Analytics Cookies') }}</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('These cookies help us understand how visitors interact with our Site by collecting and reporting information anonymously. We use analytics services like Google Analytics to track metrics such as page views, session duration, bounce rates, and traffic sources.') }}
                </p>

                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('3.3 Functional Cookies') }}</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('These cookies enable enhanced functionality and personalization, such as remembering your language preference, login details, or form inputs. They may be set by us or by third-party providers whose services we use.') }}
                </p>

                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('3.4 Marketing/Advertising Cookies') }}</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('These cookies track your browsing activity to deliver advertisements that are relevant to you and your interests. They may be set by advertising networks with our permission and can track your activity across multiple websites.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('4. Third-Party Cookies') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('In addition to our own cookies, we may use third-party cookies from the following services:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li><strong>{{ __('Google Analytics') }}</strong> – {{ __('For website analytics and performance tracking') }}</li>
                    <li><strong>{{ __('Google Tag Manager') }}</strong> – {{ __('For managing tracking codes and tags') }}</li>
                    <li><strong>{{ __('Social Media Platforms') }}</strong> – {{ __('For sharing content and social media integration') }}</li>
                </ul>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('These third parties may collect information about your online activities over time and across different websites. We recommend reviewing their privacy policies for more information.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('5. Cookie Duration') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('Cookies can be either:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li><strong>{{ __('Session Cookies') }}</strong> – {{ __('Temporary cookies that expire when you close your browser') }}</li>
                    <li><strong>{{ __('Persistent Cookies') }}</strong> – {{ __('Cookies that remain on your device until they expire or you delete them') }}</li>
                </ul>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('6. How to Manage Cookies') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('You can control and manage cookies in several ways:') }}
                </p>

                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('6.1 Browser Settings') }}</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('Most web browsers allow you to manage cookies through their settings. You can set your browser to:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li>{{ __('Block all cookies') }}</li>
                    <li>{{ __('Accept only first-party cookies') }}</li>
                    <li>{{ __('Delete cookies when you close your browser') }}</li>
                    <li>{{ __('Notify you when a cookie is being set') }}</li>
                </ul>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('Please note that blocking or deleting cookies may affect your experience and some features of the Site may not function properly.') }}
                </p>

                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('6.2 Browser-Specific Instructions') }}</h3>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li><strong>Google Chrome:</strong> <a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer" class="text-red-600 hover:text-red-700">{{ __('Cookie settings') }}</a></li>
                    <li><strong>Mozilla Firefox:</strong> <a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" target="_blank" rel="noopener noreferrer" class="text-red-600 hover:text-red-700">{{ __('Cookie settings') }}</a></li>
                    <li><strong>Safari:</strong> <a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac" target="_blank" rel="noopener noreferrer" class="text-red-600 hover:text-red-700">{{ __('Cookie settings') }}</a></li>
                    <li><strong>Microsoft Edge:</strong> <a href="https://support.microsoft.com/en-us/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer" class="text-red-600 hover:text-red-700">{{ __('Cookie settings') }}</a></li>
                </ul>

                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('6.3 Opt-Out of Analytics') }}</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('You can opt out of Google Analytics by installing the') }} <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener noreferrer" class="text-red-600 hover:text-red-700">{{ __('Google Analytics Opt-out Browser Add-on') }}</a>.
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('7. Do Not Track (DNT)') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('Some browsers include a "Do Not Track" (DNT) feature that signals to websites that you do not want to be tracked. We currently do not respond to DNT signals, as there is no industry standard for how to interpret them.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('8. Changes to This Cookie Policy') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('We may update this Cookie Policy from time to time to reflect changes in our practices or for legal, operational, or regulatory reasons. The updated policy will be posted on this page with a revised "Last updated" date.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('9. Contact Us') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('If you have questions about our use of cookies, please contact us:') }}
                </p>
                @php
                    $contactSettings = app(\App\Settings\ContactSettings::class);
                @endphp
                <div class="bg-slate-50 dark:bg-slate-800 p-6 rounded-lg border border-slate-200 dark:border-slate-700 mb-8">
                    <p class="text-slate-900 dark:text-white mb-2">
                        📧 <a href="mailto:{{ $contactSettings->email ?? 'contact@ex3mtech.com' }}" class="text-red-600 hover:text-red-700">{{ $contactSettings->email ?? 'contact@ex3mtech.com' }}</a>
                    </p>
                    <p class="text-slate-900 dark:text-white">
                        🌐 <a href="{{ url('/') }}" class="text-red-600 hover:text-red-700">{{ url('/') }}</a>
                    </p>
                </div>

                <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-3">{{ __('Manage Your Cookie Preferences') }}</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">
                        {{ __('You can change your cookie preferences at any time by clicking the button below.') }}
                    </p>
                    <button onclick="window.openCookiePreferences()" class="inline-flex items-center px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition shadow-lg">
                        <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        {{ __('Manage Cookie Preferences') }}
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
