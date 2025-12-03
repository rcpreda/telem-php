@php
    $settings = app(\App\Settings\GeneralSettings::class);
@endphp
<x-guest-layout>
    <form class="auth-form w-100" method="POST" action="{{ route('password.confirm') }}" id="kt_confirm_password_form">
        @csrf

        <!-- Logo -->
        <div class="text-center">
            <a href="{{ url('/') }}">
                <img alt="Logo" src="{{ $settings->getSiteLogoDarkUrl() }}" class="auth-logo"/>
            </a>
        </div>

        <!-- Heading -->
        <div class="text-center mb-8">
            <h1 class="text-gray-900 fw-bolder mb-3 fs-2x">{{ __('auth.confirm_password') }}</h1>
            <div class="text-gray-500 fw-semibold fs-6">{{ __('auth.confirm_password_subtitle') }}</div>
        </div>

        <!-- Password Input -->
        <div class="fv-row mb-8">
            <label class="form-label mb-2">{{ __('auth.password_label') }}</label>
            <div class="position-relative">
                <span class="position-absolute top-50 start-0 translate-middle-y ms-4 input-icon">
                    <i class="ki-duotone ki-lock-2 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                </span>
                <input
                    type="password"
                    placeholder="{{ __('auth.enter_password') }}"
                    name="password"
                    required
                    autocomplete="current-password"
                    class="form-control @error('password') is-invalid @enderror"
                />
            </div>
            @error('password')
                <div class="text-danger fs-7 mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="d-grid mb-8">
            <button type="submit" class="btn btn-auth-primary">
                <span class="indicator-label">{{ __('auth.confirm') }}</span>
                <span class="indicator-progress">
                    {{ __('auth.please_wait') }}
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
    </form>
</x-guest-layout>
