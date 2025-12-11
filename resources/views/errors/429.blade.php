<!DOCTYPE html>
<html lang="en" id="html-root">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('429 - Too Many Requests') }} | {{ config('app.name') }}</title>
    <meta name="description" content="{{ __('Too many requests. Please try again later.') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="antialiased font-sans bg-white dark:bg-slate-900">
    <!-- Navigation -->
    <x-presentation.navigation />

    <!-- Main Content -->
    <main class="relative flex items-center justify-center overflow-hidden py-8 px-4 sm:px-6 lg:px-8">
        <!-- SVG Background Pattern -->
        <div class="absolute inset-0 opacity-20 dark:opacity-10 pointer-events-none">
            <svg width="100%" height="100%" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="errorGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#dc2626"/>
                        <stop offset="100%" stop-color="#ef4444"/>
                    </linearGradient>
                    <linearGradient id="errorGrad2" x1="100%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#f87171" stop-opacity="0.8"/>
                        <stop offset="100%" stop-color="#dc2626" stop-opacity="0.8"/>
                    </linearGradient>
                </defs>

                <g stroke="url(#errorGrad1)" stroke-width="1.5" opacity="0.6">
                    <path d="M0 150 Q300 50 600 200 T1200 150 T1800 200 T2400 150 T3000 200 T3600 150" fill="none"/>
                    <path d="M0 300 Q250 150 500 350 T1000 300 T1500 350 T2000 300 T2500 350 T3000 300" fill="none"/>
                    <path d="M0 450 Q350 300 700 500 T1400 450 T2100 500 T2800 450 T3500 500" fill="none"/>
                    <path d="M0 600 Q300 450 600 650 T1200 600 T1800 650 T2400 600 T3000 650 T3600 600" fill="none"/>
                </g>

                <g fill="url(#errorGrad2)">
                    <circle cx="150" cy="175" r="5"/>
                    <circle cx="450" cy="125" r="6"/>
                    <circle cx="750" cy="225" r="5"/>
                    <circle cx="1050" cy="175" r="7"/>
                    <circle cx="200" cy="325" r="5"/>
                    <circle cx="550" cy="275" r="6"/>
                    <circle cx="900" cy="375" r="5"/>
                    <circle cx="1200" cy="325" r="7"/>
                </g>
            </svg>
        </div>

        <!-- Content Container -->
        <div class="relative max-w-4xl mx-auto text-center">
            <!-- 429 Number -->
            <div class="mb-6">
                <h1 class="text-8xl sm:text-9xl font-black text-transparent bg-clip-text bg-gradient-to-br from-red-600 via-red-500 to-red-400 leading-none">
                    429
                </h1>
            </div>

            <!-- Error Message -->
            <div class="mb-6">
                <h2 class="error-heading text-2xl sm:text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-3">
                    Too Many Requests
                </h2>
                <p class="error-description text-lg sm:text-xl text-slate-600 dark:text-slate-400 max-w-2xl mx-auto mb-4">
                    Whoa there! You're moving a bit too fast. Please wait a moment before trying again.
                </p>
                <div class="inline-flex items-center px-4 py-2 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                    <svg class="h-5 w-5 text-red-600 dark:text-red-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="retry-message text-sm font-medium text-red-800 dark:text-red-300">
                        Please wait 60 seconds before trying again
                    </span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-8">
                <a href="{{ route('home') }}" class="btn-home inline-flex items-center px-6 py-3 rounded-lg text-base font-semibold text-white bg-red-600 hover:bg-red-700 transition shadow-lg">
                    <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Back to Home
                </a>
            </div>

            <!-- Info Box -->
            <div class="border-t border-slate-200 dark:border-slate-800 pt-6">
                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-lg p-6 max-w-2xl mx-auto">
                    <h3 class="info-title text-lg font-semibold text-slate-900 dark:text-white mb-3">
                        Why am I seeing this?
                    </h3>
                    <p class="info-text text-sm text-slate-600 dark:text-slate-400">
                        To protect our service from abuse, we limit the number of requests you can make within a short period. This helps ensure the site remains fast and available for everyone. Please wait a minute and try again.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <x-presentation.footer />

    <!-- Cookie Consent Banner -->
    <x-cookie-consent />

    <!-- Locale from localStorage -->
    <script>
        (function() {
            // Validate and sanitize locale - only allow 'en' or 'ro'
            let locale = localStorage.getItem('locale');
            if (locale !== 'en' && locale !== 'ro') {
                locale = 'en';
            }
            document.getElementById('html-root').setAttribute('lang', locale);

            // Translations object
            const translations = {
                'en': {
                    'title': '429 - Too Many Requests',
                    'heading': 'Too Many Requests',
                    'description': "Whoa there! You're moving a bit too fast. Please wait a moment before trying again.",
                    'retryMessage': 'Please wait 60 seconds before trying again',
                    'backHome': 'Back to Home',
                    'infoTitle': 'Why am I seeing this?',
                    'infoText': 'To protect our service from abuse, we limit the number of requests you can make within a short period. This helps ensure the site remains fast and available for everyone. Please wait a minute and try again.'
                },
                'ro': {
                    'title': '429 - Prea Multe Solicitări',
                    'heading': 'Prea Multe Solicitări',
                    'description': 'Hopa! Te miști puțin prea repede. Te rugăm să aștepți un moment înainte de a încerca din nou.',
                    'retryMessage': 'Vă rugăm să așteptați 60 de secunde înainte de a încerca din nou',
                    'backHome': 'Înapoi Acasă',
                    'infoTitle': 'De ce văd asta?',
                    'infoText': 'Pentru a proteja serviciul nostru de abuz, limităm numărul de solicitări pe care le puteți face într-o perioadă scurtă. Acest lucru ajută să ne asigurăm că site-ul rămâne rapid și disponibil pentru toată lumea. Vă rugăm să așteptați un minut și încercați din nou.'
                }
            };

            const t = translations[locale];

            // Update page content
            document.title = t.title + ' | {{ config("app.name") }}';
            document.querySelector('meta[name="description"]').content = t.description;
            document.querySelector('.error-heading').textContent = t.heading;
            document.querySelector('.error-description').textContent = t.description;
            document.querySelector('.retry-message').textContent = t.retryMessage;
            document.querySelector('.btn-home').innerHTML = '<svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>' + t.backHome;
            document.querySelector('.info-title').textContent = t.infoTitle;
            document.querySelector('.info-text').textContent = t.infoText;
        })();
    </script>
</body>
</html>
