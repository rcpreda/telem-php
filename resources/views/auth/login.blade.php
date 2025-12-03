@php
    $settings = app(\App\Settings\GeneralSettings::class);
@endphp
<x-guest-layout>
    <form class="auth-form w-100" method="POST" action="{{ route('login') }}" id="kt_sign_in_form">
        @csrf

        <!-- Logo -->
        <div class="text-center">
            <a href="{{ url('/') }}">
                <img alt="Logo" src="{{ $settings->getSiteLogoDarkUrl() }}" class="auth-logo"/>
            </a>
        </div>

        <!-- Heading -->
        <div class="text-center mb-8">
            <h1 class="text-gray-900 fw-bolder mb-3 fs-2x">{{ __('auth.sign_in') }}</h1>
            <div class="text-gray-500 fw-semibold fs-6">{{ __('auth.sign_in_subtitle', ['app' => config('app.name')]) }}</div>
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success d-flex align-items-center p-4 mb-8" style="background-color: #d1fae5; border-left: 4px solid #10b981; border-radius: 8px;">
                <i class="ki-duotone ki-check-circle fs-2x text-success me-3"><span class="path1"></span><span class="path2"></span></i>
                <div class="d-flex flex-column">
                    <span class="text-gray-700 fs-7">{{ session('status') }}</span>
                </div>
            </div>
        @endif

        <!-- Email Input -->
        <div class="fv-row mb-6">
            <label class="form-label mb-2">{{ __('auth.email') }}</label>
            <div class="position-relative">
                <span class="position-absolute top-50 start-0 translate-middle-y ms-4 input-icon">
                    <i class="ki-duotone ki-sms fs-4"><span class="path1"></span><span class="path2"></span></i>
                </span>
                <input
                    type="email"
                    placeholder="{{ __('auth.enter_email') }}"
                    name="email"
                    value="{{ old('email') }}"
                    autocomplete="username"
                    required
                    autofocus
                    class="form-control @error('email') is-invalid @enderror"
                />
            </div>
            @error('email')
                <div class="text-danger fs-7 mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password Input -->
        <div class="fv-row mb-4">
            <label class="form-label mb-2">{{ __('auth.password_label') }}</label>
            <div class="position-relative">
                <span class="position-absolute top-50 start-0 translate-middle-y ms-4 input-icon">
                    <i class="ki-duotone ki-lock-2 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                </span>
                <input
                    type="password"
                    placeholder="{{ __('auth.enter_password') }}"
                    name="password"
                    autocomplete="current-password"
                    required
                    class="form-control @error('password') is-invalid @enderror"
                />
            </div>
            @error('password')
                <div class="text-danger fs-7 mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="d-flex flex-stack flex-wrap gap-3 mb-8">
            <div>
                <label class="form-check form-check-custom form-check-solid d-flex align-items-center" style="cursor: pointer;">
                    <input class="form-check-input me-2" type="checkbox" name="remember" id="remember_me" style="width: 18px; height: 18px;">
                    <span class="form-check-label fw-semibold text-gray-700 fs-7">
                        {{ __('auth.remember_me') }}
                    </span>
                </label>
            </div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="link-primary fs-7">
                    {{ __('auth.forgot_password_link') }}
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="d-grid mb-8">
            <button type="submit" class="btn btn-auth-primary">
                <span class="indicator-label">{{ __('auth.sign_in_button') }}</span>
                <span class="indicator-progress">
                    {{ __('auth.please_wait') }}
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>

        <!-- Sign Up Link -->
        @if (Route::has('register'))
            <div class="text-gray-500 text-center fw-semibold fs-7">
                {{ __('auth.not_a_member') }}
                <a href="{{ route('register') }}" class="link-primary">{{ __('auth.sign_up') }}</a>
            </div>
        @endif
    </form>
</x-guest-layout>
