@php
    $settings = app(\App\Settings\GeneralSettings::class);
@endphp
<x-guest-layout>
    <div class="auth-form w-100">
        <!-- Logo -->
        <div class="text-center">
            <a href="{{ url('/') }}">
                <img alt="Logo" src="{{ $settings->getSiteLogoDarkUrl() }}" class="auth-logo"/>
            </a>
        </div>

        <!-- Heading -->
        <div class="text-center mb-8">
            <h1 class="text-gray-900 fw-bolder mb-3 fs-2x">{{ __('auth.verify_email') }}</h1>
            <div class="text-gray-500 fw-semibold fs-6">{{ __('auth.verify_email_subtitle') }}</div>
        </div>

        <!-- Status Message -->
        @if (session('status') == 'verification-link-sent')
            <div class="alert alert-success d-flex align-items-center p-4 mb-8" style="background-color: #d1fae5; border-left: 4px solid #10b981; border-radius: 8px;">
                <i class="ki-duotone ki-check-circle fs-2x text-success me-3"><span class="path1"></span><span class="path2"></span></i>
                <div class="d-flex flex-column">
                    <span class="text-gray-700 fs-7">{{ __('auth.verification_link_sent') }}</span>
                </div>
            </div>
        @endif

        <!-- Actions -->
        <div class="d-flex flex-column gap-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="d-grid">
                    <button type="submit" class="btn btn-auth-primary">
                        <span class="indicator-label">{{ __('auth.resend_verification') }}</span>
                        <span class="indicator-progress">
                            {{ __('auth.please_wait') }}
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="d-grid">
                    <button type="submit" class="btn btn-auth-secondary">
                        {{ __('auth.log_out') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
