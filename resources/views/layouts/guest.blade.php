<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Keen Stylesheets (Keen-specific styles) -->
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

        <!-- Custom compact styles -->
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

        <style>
            /* Auth page custom styles */
            .auth-bg {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
            }

            .auth-card {
                background-color: rgba(255, 255, 255, 0.98);
                backdrop-filter: blur(10px);
                border-radius: 16px;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            }

            .auth-logo {
                height: 100px;
            }

            /* Custom input styling */
            .auth-form .form-control {
                background-color: #f8fafc !important;
                border: 2px solid #e2e8f0 !important;
                border-radius: 10px !important;
                font-size: 14px !important;
                font-weight: 500 !important;
                color: #1e293b !important;
                padding: 0.75rem 1rem 0.75rem 3.25rem !important;
                transition: all 0.3s ease !important;
            }

            .auth-form .form-control:focus {
                background-color: #ffffff !important;
                border-color: #7c3aed !important;
                box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1) !important;
            }

            .auth-form .form-control::placeholder {
                color: #94a3b8 !important;
                font-weight: 400 !important;
            }

            /* Form label styling */
            .auth-form .form-label {
                font-weight: 600 !important;
                color: #334155 !important;
                font-size: 13px !important;
            }

            /* Input icon styling */
            .auth-form .input-icon {
                color: #64748b !important;
            }

            /* Custom checkbox styling */
            .auth-form .form-check-input:checked {
                background-color: #7c3aed !important;
                border-color: #7c3aed !important;
            }

            .auth-form .form-check-input:focus {
                border-color: #8b5cf6 !important;
                box-shadow: 0 0 0 0.2rem rgba(124, 58, 237, 0.25) !important;
            }

            /* Primary button styling */
            .auth-form .btn-auth-primary {
                background: linear-gradient(135deg, #7c3aed 0%, #5b21b6 100%);
                color: white !important;
                border: none;
                border-radius: 8px;
                font-weight: 600;
                font-size: 14px;
                padding: 0.6rem 1.25rem;
                box-shadow: 0 4px 15px rgba(124, 58, 237, 0.4);
                transition: all 0.3s ease;
            }

            .auth-form .btn-auth-primary:hover,
            .auth-form .btn-auth-primary:focus,
            .auth-form .btn-auth-primary:active {
                background: linear-gradient(135deg, #6d28d9 0%, #4c1d95 100%);
                color: white !important;
                box-shadow: 0 6px 20px rgba(124, 58, 237, 0.5);
                transform: translateY(-1px);
            }

            /* Secondary button styling */
            .auth-form .btn-auth-secondary {
                background-color: #f1f5f9;
                color: #475569 !important;
                border: 2px solid #e2e8f0;
                border-radius: 8px;
                font-weight: 600;
                font-size: 14px;
                padding: 0.6rem 1.25rem;
                transition: all 0.3s ease;
            }

            .auth-form .btn-auth-secondary:hover,
            .auth-form .btn-auth-secondary:focus,
            .auth-form .btn-auth-secondary:active {
                background-color: #e2e8f0;
                color: #334155 !important;
                border-color: #cbd5e1;
            }

            /* Link styling */
            .auth-form .link-primary {
                color: #7c3aed !important;
                text-decoration: none;
                font-weight: 500;
            }

            .auth-form .link-primary:hover {
                color: #5b21b6 !important;
            }

            /* Language switcher */
            .language-switcher {
                position: absolute;
                top: 20px;
                right: 20px;
            }

            .language-switcher a {
                display: inline-block;
                padding: 6px 12px;
                margin-left: 5px;
                border-radius: 6px;
                text-decoration: none;
                font-weight: 600;
                font-size: 13px;
                color: rgba(255, 255, 255, 0.7);
                transition: all 0.3s ease;
            }

            .language-switcher a:hover {
                background-color: rgba(255, 255, 255, 0.1);
                color: white;
            }

            .language-switcher a.active {
                background-color: rgba(255, 255, 255, 0.2);
                color: white;
            }

            /* Theme mode visibility */
            [data-bs-theme="light"] .theme-dark-show {
                display: none !important;
            }
            [data-bs-theme="dark"] .theme-light-show {
                display: none !important;
            }
        </style>

        @vite(['resources/scss/auth.scss', 'resources/js/auth.js'])
    </head>
    <body id="kt_body" class="app-blank">
        <!-- Theme mode setup on page load -->
        <script>
            var defaultThemeMode = "light";
            var themeMode;
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                } else {
                    if (localStorage.getItem("data-bs-theme") !== null) {
                        themeMode = localStorage.getItem("data-bs-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                document.documentElement.setAttribute("data-bs-theme", themeMode);
            }
        </script>

        <!-- Root -->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!-- Authentication Layout - Centered -->
            <div class="d-flex flex-center flex-column flex-column-fluid auth-bg position-relative">
                <!-- Language Switcher -->
                @if(Route::has('language.switch'))
                <div class="language-switcher">
                    <a href="{{ route('language.switch', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
                    <a href="{{ route('language.switch', 'ro') }}" class="{{ app()->getLocale() == 'ro' ? 'active' : '' }}">RO</a>
                </div>
                @endif

                <!-- Form Card -->
                <div class="auth-card p-10 p-lg-15 mx-auto w-100 my-10" style="max-width: 450px;">
                    {{ $slot }}
                </div>

                <!-- Footer -->
                <div class="d-flex flex-center flex-wrap py-5">
                    <div class="d-flex fw-semibold fs-7 text-white text-opacity-75">
                        &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('auth.all_rights_reserved') }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
