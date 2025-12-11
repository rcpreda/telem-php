<!DOCTYPE html>
<html lang="en" id="html-root">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('404 - Page Not Found') }} | {{ config('app.name') }}</title>
    <meta name="description" content="{{ __('The page you are looking for could not be found.') }}">

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
            <!-- 404 Number -->
            <div class="mb-6">
                <h1 class="text-8xl sm:text-9xl font-black text-transparent bg-clip-text bg-gradient-to-br from-red-600 via-red-500 to-red-400 leading-none">
                    404
                </h1>
            </div>

            <!-- Error Message -->
            <div class="mb-6">
                <h2 class="error-heading text-2xl sm:text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-3">
                    Page Not Found
                </h2>
                <p class="error-description text-lg sm:text-xl text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">
                    Oops! The page you're looking for seems to have wandered off. It might have been moved, deleted, or perhaps it never existed.
                </p>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-8">
                <a href="{{ route('home') }}" class="btn-home inline-flex items-center px-6 py-3 rounded-lg text-base font-semibold text-white bg-red-600 hover:bg-red-700 transition shadow-lg">
                    <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Back to Home
                </a>
                <a href="{{ route('contact') }}" class="btn-contact inline-flex items-center px-6 py-3 rounded-lg text-base font-semibold text-slate-700 dark:text-slate-300 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition">
                    <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Contact Support
                </a>
            </div>

            <!-- Quick Links -->
            <div class="border-t border-slate-200 dark:border-slate-800 pt-6">
                <h3 class="popular-pages-title text-sm font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-4">
                    Or Try These Popular Pages
                </h3>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <a href="{{ route('about') }}" class="group p-4 rounded-lg bg-slate-50 dark:bg-slate-800/50 hover:bg-red-50 dark:hover:bg-red-950/30 transition">
                        <svg class="h-8 w-8 mx-auto mb-2 text-slate-400 dark:text-slate-500 group-hover:text-red-600 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="link-text text-sm font-medium text-slate-700 dark:text-slate-300 group-hover:text-red-600 dark:group-hover:text-red-400">
                            About
                        </span>
                    </a>
                    <a href="{{ route('services') }}" class="group p-4 rounded-lg bg-slate-50 dark:bg-slate-800/50 hover:bg-red-50 dark:hover:bg-red-950/30 transition">
                        <svg class="h-8 w-8 mx-auto mb-2 text-slate-400 dark:text-slate-500 group-hover:text-red-600 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="link-text text-sm font-medium text-slate-700 dark:text-slate-300 group-hover:text-red-600 dark:group-hover:text-red-400">
                            Services
                        </span>
                    </a>
                    <a href="{{ route('case-studies') }}" class="group p-4 rounded-lg bg-slate-50 dark:bg-slate-800/50 hover:bg-red-50 dark:hover:bg-red-950/30 transition">
                        <svg class="h-8 w-8 mx-auto mb-2 text-slate-400 dark:text-slate-500 group-hover:text-red-600 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span class="link-text text-sm font-medium text-slate-700 dark:text-slate-300 group-hover:text-red-600 dark:group-hover:text-red-400">
                            Case Studies
                        </span>
                    </a>
                    <a href="{{ route('contact') }}" class="group p-4 rounded-lg bg-slate-50 dark:bg-slate-800/50 hover:bg-red-50 dark:hover:bg-red-950/30 transition">
                        <svg class="h-8 w-8 mx-auto mb-2 text-slate-400 dark:text-slate-500 group-hover:text-red-600 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="link-text text-sm font-medium text-slate-700 dark:text-slate-300 group-hover:text-red-600 dark:group-hover:text-red-400">
                            Contact
                        </span>
                    </a>
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
                    'title': '404 - Page Not Found',
                    'heading': 'Page Not Found',
                    'description': "Oops! The page you're looking for seems to have wandered off. It might have been moved, deleted, or perhaps it never existed.",
                    'backHome': 'Back to Home',
                    'contactSupport': 'Contact Support',
                    'popularPages': 'Or Try These Popular Pages',
                    'about': 'About',
                    'services': 'Services',
                    'caseStudies': 'Case Studies',
                    'contact': 'Contact'
                },
                'ro': {
                    'title': '404 - Pagina Nu A Fost Găsită',
                    'heading': 'Pagină Negăsită',
                    'description': 'Oops! Pagina pe care o căutați pare să fi dispărut. S-ar putea să fi fost mutată, ștearsă sau poate nu a existat niciodată.',
                    'backHome': 'Înapoi Acasă',
                    'contactSupport': 'Contactează Suportul',
                    'popularPages': 'Sau Încearcă Aceste Pagini Populare',
                    'about': 'Despre Noi',
                    'services': 'Servicii',
                    'caseStudies': 'Studii de Caz',
                    'contact': 'Contact'
                }
            };

            const t = translations[locale];

            // Update page content
            document.title = t.title + ' | {{ config("app.name") }}';
            document.querySelector('meta[name="description"]').content = t.description;
            document.querySelector('.error-heading').textContent = t.heading;
            document.querySelector('.error-description').textContent = t.description;
            document.querySelector('.btn-home').innerHTML = '<svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>' + t.backHome;
            document.querySelector('.btn-contact').innerHTML = '<svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>' + t.contactSupport;
            document.querySelector('.popular-pages-title').textContent = t.popularPages;
            document.querySelectorAll('.link-text')[0].textContent = t.about;
            document.querySelectorAll('.link-text')[1].textContent = t.services;
            document.querySelectorAll('.link-text')[2].textContent = t.caseStudies;
            document.querySelectorAll('.link-text')[3].textContent = t.contact;
        })();
    </script>
</body>
</html>
