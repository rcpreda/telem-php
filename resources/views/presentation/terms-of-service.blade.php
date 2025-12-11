@extends('layouts.presentation')

@section('title', 'Terms of Service | ' . config('app.name'))
@section('description', 'Terms of Service for ' . config('app.name') . '. Read our terms and conditions for using our services.')
@section('keywords', 'terms of service, terms and conditions, legal terms, user agreement')
@section('og_title', 'Terms of Service | ' . config('app.name'))
@section('twitter_title', 'Terms of Service | ' . config('app.name'))

@section('content')
    <!-- Page Header -->
    <section class="relative bg-gray-950 dark:bg-black text-gray-100 py-20 sm:py-24 overflow-hidden">
        <!-- SVG Background Pattern (matching hero) -->
        <div class="absolute inset-0 opacity-35 pointer-events-none">
            <svg width="100%" height="100%" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="termsGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#dc2626"/>
                        <stop offset="100%" stop-color="#ef4444"/>
                    </linearGradient>
                    <linearGradient id="termsGrad2" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#f87171" stop-opacity="0.8"/>
                        <stop offset="100%" stop-color="#dc2626" stop-opacity="0.8"/>
                    </linearGradient>
                </defs>

                <g stroke="url(#termsGrad1)" stroke-width="1.5" opacity="0.8">
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

                <g fill="url(#termsGrad2)">
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
                    {{ __('Terms of Service') }}
                </h1>
                <p class="mt-4 text-lg text-gray-300 max-w-2xl mx-auto">
                    {{ __('Last updated: December 2025') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Terms of Service Content -->
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="prose prose-slate dark:prose-invert max-w-none">
                <p class="text-lg text-slate-600 dark:text-slate-400 mb-8">
                    {{ __('Effective date: December 2025') }}
                </p>

                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('Welcome to') }} {{ config('app.name') }}. {{ __('These Terms of Service ("Terms") govern your access to and use of our website, services, and any related content (collectively, the "Services"). By accessing or using our Services, you agree to be bound by these Terms.') }}
                </p>

                <p class="text-slate-600 dark:text-slate-400 mb-8">
                    {{ __('Please read these Terms carefully. If you do not agree with these Terms, you must not use our Services.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('1. Acceptance of Terms') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('By accessing or using our Services, you confirm that you are at least 18 years old and have the legal capacity to enter into these Terms. If you are using the Services on behalf of an organization, you represent that you have the authority to bind that organization to these Terms.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('2. Services Description') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ config('app.name') }} {{ __('provides software development, consulting, and technical services including but not limited to backend engineering, payment system integration, cloud architecture, and custom software solutions. The specific scope of services will be defined in separate service agreements or statements of work.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('3. User Obligations') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">{{ __('You agree to:') }}</p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li>{{ __('Provide accurate and complete information when using our Services') }}</li>
                    <li>{{ __('Maintain the confidentiality of any account credentials') }}</li>
                    <li>{{ __('Use the Services only for lawful purposes and in compliance with all applicable laws') }}</li>
                    <li>{{ __('Not interfere with or disrupt the Services or servers') }}</li>
                    <li>{{ __('Not attempt to gain unauthorized access to any part of the Services') }}</li>
                    <li>{{ __('Not use the Services to transmit any harmful code, viruses, or malware') }}</li>
                </ul>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('4. Intellectual Property Rights') }}</h2>
                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('4.1 Our Rights') }}</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('All content, features, and functionality of the Services, including but not limited to text, graphics, logos, software, and designs, are owned by') }} {{ config('app.name') }} {{ __('or our licensors and are protected by copyright, trademark, and other intellectual property laws.') }}
                </p>

                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('4.2 Client Work') }}</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('Upon full payment for services rendered, clients will receive the agreed-upon deliverables and intellectual property rights as specified in the applicable service agreement. Unless otherwise agreed in writing, we retain the right to use general knowledge, skills, and experience gained from projects in future work.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('5. Payment Terms') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">{{ __('For consulting and development services:') }}</p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li>{{ __('Payment terms will be specified in individual service agreements or invoices') }}</li>
                    <li>{{ __('All fees are exclusive of taxes, which will be added where applicable') }}</li>
                    <li>{{ __('Late payments may be subject to interest charges and suspension of services') }}</li>
                    <li>{{ __('Refunds are handled on a case-by-case basis as specified in service agreements') }}</li>
                </ul>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('6. Warranties and Disclaimers') }}</h2>
                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('6.1 Professional Standards') }}</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('We will perform services in a professional and workmanlike manner consistent with industry standards. However, we do not guarantee specific results or outcomes.') }}
                </p>

                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('6.2 Disclaimer') }}</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('THE SERVICES ARE PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('7. Limitation of Liability') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('TO THE MAXIMUM EXTENT PERMITTED BY LAW,') }} {{ config('app.name') }} {{ __('SHALL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, OR ANY LOSS OF PROFITS OR REVENUES, WHETHER INCURRED DIRECTLY OR INDIRECTLY, OR ANY LOSS OF DATA, USE, GOODWILL, OR OTHER INTANGIBLE LOSSES RESULTING FROM:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li>{{ __('Your use or inability to use the Services') }}</li>
                    <li>{{ __('Any unauthorized access to or use of our servers or any personal information') }}</li>
                    <li>{{ __('Any interruption or cessation of the Services') }}</li>
                    <li>{{ __('Any bugs, viruses, or other harmful code that may be transmitted through the Services') }}</li>
                    <li>{{ __('Any errors or omissions in any content or for any loss or damage incurred as a result of the use of any content') }}</li>
                </ul>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('IN NO EVENT SHALL OUR TOTAL LIABILITY TO YOU EXCEED THE AMOUNT PAID BY YOU TO US IN THE SIX (6) MONTHS PRECEDING THE EVENT GIVING RISE TO LIABILITY.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('8. Indemnification') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('You agree to indemnify, defend, and hold harmless') }} {{ config('app.name') }}, {{ __('its officers, directors, employees, contractors, and agents from and against any claims, liabilities, damages, losses, and expenses arising out of or in any way connected with your access to or use of the Services, your violation of these Terms, or your violation of any rights of another party.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('9. Confidentiality') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('Both parties agree to maintain the confidentiality of any proprietary or confidential information disclosed during the course of the business relationship. This obligation survives the termination of these Terms.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('10. Termination') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('We reserve the right to suspend or terminate your access to the Services at any time, with or without cause, with or without notice. Upon termination, all provisions of these Terms that by their nature should survive termination shall survive, including but not limited to ownership provisions, warranty disclaimers, and limitations of liability.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('11. Modifications to Terms') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('We reserve the right to modify these Terms at any time. We will notify users of any material changes by posting the new Terms on this page and updating the "Last updated" date. Your continued use of the Services after such changes constitutes your acceptance of the new Terms.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('12. Governing Law and Dispute Resolution') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('These Terms shall be governed by and construed in accordance with the laws of the jurisdiction in which') }} {{ config('app.name') }} {{ __('is registered, without regard to its conflict of law provisions. Any disputes arising from these Terms or the Services shall be resolved through good faith negotiations. If negotiations fail, disputes shall be subject to the exclusive jurisdiction of the courts in our registered jurisdiction.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('13. Severability') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('If any provision of these Terms is found to be unenforceable or invalid, that provision will be limited or eliminated to the minimum extent necessary so that these Terms will otherwise remain in full force and effect.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('14. Entire Agreement') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('These Terms, together with any service agreements or statements of work, constitute the entire agreement between you and') }} {{ config('app.name') }} {{ __('regarding the use of our Services and supersede all prior agreements and understandings.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('15. Contact Information') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('If you have any questions about these Terms, please contact us:') }}
                </p>
                @php
                    $contactSettings = app(\App\Settings\ContactSettings::class);
                @endphp
                <div class="bg-slate-50 dark:bg-slate-800 p-6 rounded-lg border border-slate-200 dark:border-slate-700">
                    <p class="text-slate-900 dark:text-white mb-2">
                        📧 <a href="mailto:{{ $contactSettings->email ?? 'contact@ex3mtech.com' }}" class="text-red-600 hover:text-red-700">{{ $contactSettings->email ?? 'contact@ex3mtech.com' }}</a>
                    </p>
                    <p class="text-slate-900 dark:text-white">
                        🌐 <a href="{{ url('/') }}" class="text-red-600 hover:text-red-700">{{ url('/') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
