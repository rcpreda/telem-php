<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <meta name="description" content="@yield('description', 'Expert backend engineering, payment systems, and fintech integrations for SaaS and enterprise platforms.')">
    <meta name="keywords" content="@yield('keywords', 'backend engineering, payment systems, fintech, stripe integration, laravel development, PHP development, cloud architecture, AWS')">
    <meta name="author" content="{{ config('app.name') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', config('app.name'))">
    <meta property="og:description" content="@yield('og_description', 'Expert backend engineering, payment systems, and fintech integrations for SaaS and enterprise platforms.')">
    <meta property="og:image" content="@yield('og_image', asset('storage/logos/default-small-dark.png'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', config('app.name'))">
    <meta property="twitter:description" content="@yield('twitter_description', 'Expert backend engineering, payment systems, and fintech integrations for SaaS and enterprise platforms.')">
    <meta property="twitter:image" content="@yield('twitter_image', asset('storage/logos/default-small-dark.png'))">

    <link rel="canonical" href="{{ url()->current() }}">

    <!-- JSON-LD Structured Data -->
    @php
        $contactSettings = app(\App\Settings\ContactSettings::class);
        $socialUrls = array_filter([
            $contactSettings->facebook_url ?? null,
            $contactSettings->twitter_url ?? null,
            $contactSettings->linkedin_url ?? null,
            $contactSettings->instagram_url ?? null,
        ]);
    @endphp
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "{{ config('app.name') }}",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('storage/logos/default.png') }}",
        "description": "Expert backend engineering and payment system development for fintech, SaaS, and enterprise platforms.",
        "sameAs": {!! json_encode($socialUrls) !!},
        "contactPoint": {
            "@@type": "ContactPoint",
            "email": "{{ $contactSettings->email ?? '' }}",
            "contactType": "Customer Service"
        }
    }
    </script>

    @stack('structured-data')

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

    @if(config('services.google_analytics.id'))
        <!-- Google Analytics ID (loaded by cookie consent banner if user accepts) -->
        <script>
            window.GA_MEASUREMENT_ID = '{{ config('services.google_analytics.id') }}';
        </script>
    @endif
</head>
<body class="antialiased font-sans bg-white dark:bg-slate-900">
    <!-- Navigation -->
    <x-presentation.navigation />

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <x-presentation.footer />

    <!-- Cookie Consent Banner -->
    <x-cookie-consent />
</body>
</html>
