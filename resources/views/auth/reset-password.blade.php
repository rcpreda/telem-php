@php
    $settings = app(\App\Settings\GeneralSettings::class);
@endphp
<x-guest-layout>
    <form class="auth-form w-100" method="POST" action="{{ route('password.store') }}" id="kt_new_password_form">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Logo -->
        <div class="text-center">
            <a href="{{ url('/') }}">
                <img alt="Logo" src="{{ $settings->getSiteLogoDarkUrl() }}" class="auth-logo"/>
            </a>
        </div>

        <!-- Heading -->
        <div class="text-center mb-8">
            <h1 class="text-gray-900 fw-bolder mb-3 fs-2x">{{ __('auth.reset_password') }}</h1>
            <div class="text-gray-500 fw-semibold fs-6">{{ __('auth.reset_password_subtitle') }}</div>
        </div>

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
                    value="{{ old('email', $request->email) }}"
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
        <div class="fv-row mb-6">
            <label class="form-label mb-2">{{ __('auth.new_password') }}</label>
            <div class="position-relative">
                <span class="position-absolute top-50 start-0 translate-middle-y ms-4 input-icon">
                    <i class="ki-duotone ki-lock-2 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                </span>
                <input
                    type="password"
                    placeholder="{{ __('auth.enter_new_password') }}"
                    name="password"
                    autocomplete="new-password"
                    required
                    class="form-control @error('password') is-invalid @enderror"
                />
            </div>
            @error('password')
                <div class="text-danger fs-7 mt-2">{{ $message }}</div>
            @else
                <div class="text-muted fs-8 mt-2">{{ __('auth.password_hint') }}</div>
            @enderror
        </div>

        <!-- Confirm Password Input -->
        <div class="fv-row mb-8">
            <label class="form-label mb-2">{{ __('auth.confirm_password_label') }}</label>
            <div class="position-relative">
                <span class="position-absolute top-50 start-0 translate-middle-y ms-4 input-icon">
                    <i class="ki-duotone ki-lock-2 fs-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                </span>
                <input
                    type="password"
                    placeholder="{{ __('auth.confirm_new_password') }}"
                    name="password_confirmation"
                    autocomplete="new-password"
                    required
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                />
            </div>
            @error('password_confirmation')
                <div class="text-danger fs-7 mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="d-grid mb-8">
            <button type="submit" class="btn btn-auth-primary">
                <span class="indicator-label">{{ __('auth.reset_password_button') }}</span>
                <span class="indicator-progress">
                    {{ __('auth.please_wait') }}
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
    </form>
</x-guest-layout>
