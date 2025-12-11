<!-- Cookie Consent Banner -->
<div id="cookieConsentBanner" class="hidden fixed bottom-0 left-0 right-0 z-50 p-4 sm:p-6 bg-white dark:bg-gray-900 border-t-2 border-red-600 shadow-2xl">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div class="flex-1">
                <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">
                    🍪 {{ __('We Use Cookies') }}
                </h3>
                <p class="text-sm text-slate-600 dark:text-slate-400 mb-3 sm:mb-0">
                    {{ __('We use cookies to enhance your browsing experience, serve personalized content, and analyze our traffic. By clicking "Accept All", you consent to our use of cookies.') }}
                    <a href="{{ route('cookie-policy') }}" class="text-red-600 hover:text-red-700 underline">{{ __('Learn more') }}</a>
                </p>
            </div>
            <div class="flex flex-wrap gap-2 sm:flex-nowrap sm:ml-4">
                <button id="cookieRejectBtn" class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-300 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-lg transition">
                    {{ __('Reject All') }}
                </button>
                <button id="cookieCustomizeBtn" class="px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-300 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-lg transition">
                    {{ __('Customize') }}
                </button>
                <button id="cookieAcceptBtn" class="px-4 py-2 text-sm font-medium text-white bg-red-600 hover:bg-red-700 rounded-lg transition shadow-lg">
                    {{ __('Accept All') }}
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Cookie Preferences Modal -->
<div id="cookiePreferencesModal" class="hidden fixed inset-0 z-50 overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <!-- Background overlay -->
        <div class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-75" id="cookieModalOverlay"></div>

        <!-- Modal panel -->
        <div class="inline-block align-bottom bg-white dark:bg-gray-900 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
            <div class="bg-white dark:bg-gray-900 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                        {{ __('Cookie Preferences') }}
                    </h3>
                    <button id="cookieModalCloseBtn" class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-300">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <p class="text-sm text-slate-600 dark:text-slate-400 mb-6">
                    {{ __('Choose which cookies you want to accept. You can change your preferences at any time.') }}
                </p>

                <div class="space-y-4">
                    <!-- Essential Cookies -->
                    <div class="p-4 bg-slate-50 dark:bg-slate-800 rounded-lg">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center gap-2">
                                <h4 class="font-semibold text-slate-900 dark:text-white">{{ __('Essential Cookies') }}</h4>
                                <span class="px-2 py-1 text-xs font-medium bg-slate-200 dark:bg-slate-700 text-slate-700 dark:text-slate-300 rounded">{{ __('Always Active') }}</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            {{ __('These cookies are necessary for the website to function and cannot be disabled.') }}
                        </p>
                    </div>

                    <!-- Analytics Cookies -->
                    <div class="p-4 bg-slate-50 dark:bg-slate-800 rounded-lg">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-semibold text-slate-900 dark:text-white">{{ __('Analytics Cookies') }}</h4>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" id="analyticsCookiesToggle" class="sr-only peer">
                                <div class="w-11 h-6 bg-slate-300 dark:bg-slate-700 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-red-300 dark:peer-focus:ring-red-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-600"></div>
                            </label>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            {{ __('Help us understand how visitors interact with our website by collecting anonymous data.') }}
                        </p>
                    </div>

                    <!-- Marketing Cookies -->
                    <div class="p-4 bg-slate-50 dark:bg-slate-800 rounded-lg">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-semibold text-slate-900 dark:text-white">{{ __('Marketing Cookies') }}</h4>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" id="marketingCookiesToggle" class="sr-only peer">
                                <div class="w-11 h-6 bg-slate-300 dark:bg-slate-700 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-red-300 dark:peer-focus:ring-red-800 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-600"></div>
                            </label>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            {{ __('Used to deliver personalized advertisements relevant to you and your interests.') }}
                        </p>
                    </div>
                </div>

                <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-end">
                    <button id="cookieSavePreferencesBtn" class="px-6 py-2 text-sm font-medium text-white bg-red-600 hover:bg-red-700 rounded-lg transition">
                        {{ __('Save Preferences') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function() {
    'use strict';

    const COOKIE_CONSENT_KEY = 'cookie_consent';
    const COOKIE_CONSENT_EXPIRY = 365; // days

    // Get elements
    const banner = document.getElementById('cookieConsentBanner');
    const modal = document.getElementById('cookiePreferencesModal');
    const acceptBtn = document.getElementById('cookieAcceptBtn');
    const rejectBtn = document.getElementById('cookieRejectBtn');
    const customizeBtn = document.getElementById('cookieCustomizeBtn');
    const modalCloseBtn = document.getElementById('cookieModalCloseBtn');
    const modalOverlay = document.getElementById('cookieModalOverlay');
    const savePreferencesBtn = document.getElementById('cookieSavePreferencesBtn');
    const analyticsToggle = document.getElementById('analyticsCookiesToggle');
    const marketingToggle = document.getElementById('marketingCookiesToggle');

    // Check if consent already exists
    function hasConsent() {
        return localStorage.getItem(COOKIE_CONSENT_KEY) !== null;
    }

    // Get consent preferences
    function getConsent() {
        const consent = localStorage.getItem(COOKIE_CONSENT_KEY);
        return consent ? JSON.parse(consent) : null;
    }

    // Save consent
    function saveConsent(preferences) {
        const consentData = {
            ...preferences,
            timestamp: new Date().toISOString(),
            expiry: new Date(Date.now() + COOKIE_CONSENT_EXPIRY * 24 * 60 * 60 * 1000).toISOString()
        };
        localStorage.setItem(COOKIE_CONSENT_KEY, JSON.stringify(consentData));
        applyConsent(preferences);
    }

    // Apply consent (load scripts based on preferences)
    function applyConsent(preferences) {
        if (preferences.analytics) {
            loadGoogleAnalytics();
        }
        if (preferences.marketing) {
            // Load marketing scripts here if needed
        }
    }

    // Load Google Analytics
    function loadGoogleAnalytics() {
        // Only load if GA_MEASUREMENT_ID is defined in your layout
        if (typeof window.GA_MEASUREMENT_ID !== 'undefined' && window.GA_MEASUREMENT_ID) {
            // Google Analytics script
            const script1 = document.createElement('script');
            script1.async = true;
            script1.src = `https://www.googletagmanager.com/gtag/js?id=${window.GA_MEASUREMENT_ID}`;
            document.head.appendChild(script1);

            const script2 = document.createElement('script');
            script2.textContent = `
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', '${window.GA_MEASUREMENT_ID}');
            `;
            document.head.appendChild(script2);
        }
    }

    // Show banner
    function showBanner() {
        banner.classList.remove('hidden');
    }

    // Hide banner
    function hideBanner() {
        banner.classList.add('hidden');
    }

    // Show modal
    function showModal() {
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';

        // Load current preferences
        const consent = getConsent();
        if (consent) {
            analyticsToggle.checked = consent.analytics || false;
            marketingToggle.checked = consent.marketing || false;
        }
    }

    // Hide modal
    function hideModal() {
        modal.classList.add('hidden');
        document.body.style.overflow = '';

        // If user closes modal without saving and no consent exists, show banner again
        if (!hasConsent()) {
            showBanner();
        }
    }

    // Accept all cookies
    acceptBtn.addEventListener('click', function() {
        saveConsent({
            essential: true,
            analytics: true,
            marketing: true
        });
        hideBanner();
    });

    // Reject all non-essential cookies
    rejectBtn.addEventListener('click', function() {
        saveConsent({
            essential: true,
            analytics: false,
            marketing: false
        });
        hideBanner();
    });

    // Show customization modal
    customizeBtn.addEventListener('click', function() {
        hideBanner();
        showModal();
    });

    // Close modal
    modalCloseBtn.addEventListener('click', hideModal);
    modalOverlay.addEventListener('click', hideModal);

    // Save preferences from modal
    savePreferencesBtn.addEventListener('click', function() {
        saveConsent({
            essential: true,
            analytics: analyticsToggle.checked,
            marketing: marketingToggle.checked
        });
        hideModal();
    });

    // Initialize
    if (!hasConsent()) {
        showBanner();
    } else {
        // Apply existing consent
        const consent = getConsent();
        if (consent) {
            applyConsent(consent);
        }
    }

    // Expose function to reopen preferences (can be called from Cookie Policy page)
    window.openCookiePreferences = function() {
        showModal();
    };
})();
</script>
