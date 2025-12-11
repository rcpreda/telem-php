@extends('layouts.presentation')

@section('title', 'Privacy Policy | ' . config('app.name'))
@section('description', 'Privacy Policy for Extreme Tech Solutions. Learn how we collect, use, and protect your personal data.')
@section('keywords', 'privacy policy, data protection, GDPR, personal data, cookies')
@section('og_title', 'Privacy Policy | ' . config('app.name'))
@section('twitter_title', 'Privacy Policy | ' . config('app.name'))

@section('content')
    <!-- Page Header -->
    <section class="relative bg-gray-950 dark:bg-black text-gray-100 py-20 sm:py-24 overflow-hidden">
        <!-- SVG Background Pattern (matching hero) -->
        <div class="absolute inset-0 opacity-35 pointer-events-none">
            <svg width="100%" height="100%" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="privacyGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#dc2626"/>
                        <stop offset="100%" stop-color="#ef4444"/>
                    </linearGradient>
                    <linearGradient id="privacyGrad2" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#f87171" stop-opacity="0.8"/>
                        <stop offset="100%" stop-color="#dc2626" stop-opacity="0.8"/>
                    </linearGradient>
                </defs>

                <g stroke="url(#privacyGrad1)" stroke-width="1.5" opacity="0.8">
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

                <g fill="url(#privacyGrad2)">
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
                    {{ __('Privacy Policy') }}
                </h1>
                <p class="mt-4 text-lg text-gray-300 max-w-2xl mx-auto">
                    {{ __('Last updated: December 2025') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Content -->
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="prose prose-slate dark:prose-invert max-w-none">
                <p class="text-lg text-slate-600 dark:text-slate-400 mb-8">
                    {{ __('Effective date: December 2025') }}
                </p>

                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ config('app.name') }} {{ __('("we", "us", "our") respects your privacy and is committed to protecting your personal data. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website') }} <a href="{{ url('/') }}" class="text-red-600 hover:text-red-700">{{ url('/') }}</a> {{ __('(the "Site") and when you interact with our Lead Gen Forms, contact forms, services, or email lists.') }}
                </p>

                <p class="text-slate-600 dark:text-slate-400 mb-8">
                    {{ __('By using the Site or submitting information to us, you consent to the collection and use of your data as described in this policy.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('1. Information We Collect') }}</h2>

                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('1.1 Personal Data') }}</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('We may collect personal information you voluntarily provide when you:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li>{{ __('fill out a contact or lead form') }}</li>
                    <li>{{ __('request a quote or consultation') }}</li>
                    <li>{{ __('sign up for newsletters or updates') }}</li>
                    <li>{{ __('send us a message via email or messaging systems') }}</li>
                </ul>

                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('Personal data may include:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li>{{ __('full name') }}</li>
                    <li>{{ __('business email address') }}</li>
                    <li>{{ __('phone number') }}</li>
                    <li>{{ __('company name') }}</li>
                    <li>{{ __('job title') }}</li>
                    <li>{{ __('any other information you choose to provide') }}</li>
                </ul>

                <h3 class="text-xl font-semibold text-slate-900 dark:text-white mt-8 mb-3">{{ __('1.2 Automatically Collected Information') }}</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('When you visit our Site, we may automatically collect:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li>{{ __('IP address') }}</li>
                    <li>{{ __('browser type and version') }}</li>
                    <li>{{ __('device type') }}</li>
                    <li>{{ __('pages viewed') }}</li>
                    <li>{{ __('date/time stamps') }}</li>
                    <li>{{ __('referral/exit pages') }}</li>
                    <li>{{ __('usage analytics') }}</li>
                </ul>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('This information is collected through cookies and similar tracking technologies (see Section 6).') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('2. How We Use Your Information') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('We use collected information to:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li>{{ __('respond to your inquiries and provide requested services') }}</li>
                    <li>{{ __('send administrative information (e.g., confirmations, updates)') }}</li>
                    <li>{{ __('deliver marketing and promotional communications (with consent)') }}</li>
                    <li>{{ __('improve our Site and services') }}</li>
                    <li>{{ __('monitor and analyze usage and trends') }}</li>
                    <li>{{ __('detect, prevent, or address technical issues') }}</li>
                </ul>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('We will not use your data for purposes not disclosed in this policy without your consent.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('3. Legal Basis for Processing (GDPR)') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('If you are located in the European Economic Area (EEA), we process your data under the following legal bases:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li><strong>{{ __('Consent') }}</strong>: {{ __('where you have given consent for a specific purpose') }}</li>
                    <li><strong>{{ __('Contract') }}</strong>: {{ __('to perform services you\'ve requested') }}</li>
                    <li><strong>{{ __('Legitimate interests') }}</strong>: {{ __('to improve our services and maintain Site security') }}</li>
                </ul>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('You may withdraw consent at any time (see Section 9).') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('4. Sharing Your Information') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('We may share your information with:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li>{{ __('service providers who assist with Site operations, analytics, and marketing') }}</li>
                    <li>{{ __('legal authorities if required by law or legal process') }}</li>
                    <li>{{ __('third parties in connection with a business transition (e.g., merger, sale, acquisition)') }}</li>
                </ul>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('We do not sell your personal information.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('5. Third-Party Links and Services') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('Our Site may contain links to third-party websites or services. We have no control over, and are not responsible for, the content, privacy practices, or policies of those third parties. We encourage you to review their privacy policies.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('6. Cookies and Tracking Technologies') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('We use cookies and similar tracking technologies to:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li>{{ __('track Site usage') }}</li>
                    <li>{{ __('store preferences') }}</li>
                    <li>{{ __('tailor your experience') }}</li>
                </ul>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('You can manage your cookie preferences through your browser settings. Disabling cookies may affect Site functionality.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('7. Storage and Security') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('We implement reasonable technical and organizational safeguards to protect personal data against unauthorized access, alteration, or disclosure. However, no internet transmission or storage system can be guaranteed to be 100% secure.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('8. Data Retention') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('We retain personal data only as long as necessary to fulfill the purposes listed in this policy unless a longer retention period is required by law. If you ask us to delete your data, we will take reasonable steps to do so (see Section 9).') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('9. Your Rights') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('Depending on your location, you may have rights regarding your personal data, such as:') }}
                </p>
                <ul class="list-disc pl-6 space-y-2 text-slate-600 dark:text-slate-400 mb-6">
                    <li>{{ __('right to access') }}</li>
                    <li>{{ __('right to correct') }}</li>
                    <li>{{ __('right to delete') }}</li>
                    <li>{{ __('right to restrict processing') }}</li>
                    <li>{{ __('right to object to processing') }}</li>
                    <li>{{ __('right to data portability') }}</li>
                    <li>{{ __('right to withdraw consent') }}</li>
                </ul>
                @php
                    $contactSettings = app(\App\Settings\ContactSettings::class);
                @endphp
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('To exercise your rights, contact us at') }} <a href="mailto:{{ $contactSettings->email ?? 'contact@ex3mtech.com' }}" class="text-red-600 hover:text-red-700">{{ $contactSettings->email ?? 'contact@ex3mtech.com' }}</a>.
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('10. Children\'s Privacy') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('Our Site is not intended for individuals under 16, and we do not knowingly collect personal data from children.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('11. Changes to this Policy') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('We may update this Privacy Policy from time to time. The revised version will be posted on this page with an updated "Last updated" date. We encourage you to review this policy periodically.') }}
                </p>

                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mt-12 mb-4">{{ __('12. Contact Us') }}</h2>
                <p class="text-slate-600 dark:text-slate-400 mb-4">
                    {{ __('If you have questions or concerns about this Privacy Policy, please contact:') }}
                </p>
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
