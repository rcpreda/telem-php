<x-app-layout>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('user.edit_user') }}: {{ $user->first_name }} {{ $user->last_name }}</h3>
            <div class="card-toolbar">
                <a href="{{ route('users.index') }}" class="btn btn-sm btn-light">
                    <i class="ki-duotone ki-arrow-left fs-4"><span class="path1"></span><span class="path2"></span></i>
                    {{ __('user.back_to_list') }}
                </a>
            </div>
        </div>

        <div class="card-body">
            <x-common.flash/>

            <form method="POST" action="{{ route('users.update', $user->id) }}" novalidate>
                @csrf
                @method('PATCH')

                <!-- Personal & Contact Information -->
                <div class="row g-3 mb-4">
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-header bg-light border-0 py-2">
                                <h5 class="card-title align-items-start flex-column mb-0">
                                    <span class="card-label fw-bold text-dark fs-7">
                                        <i class="ki-duotone ki-user fs-6 text-muted me-2"><span class="path1"></span><span class="path2"></span></i>
                                        {{ __('user.personal_contact_info') }}
                                    </span>
                                </h5>
                            </div>
                            <div class="card-body py-3">
                                <div class="row mb-3">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-7">{{ __('user.first_name') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="first_name" class="form-control form-control-sm @error('first_name') is-invalid @enderror" value="{{ old('first_name', $user->first_name) }}" placeholder="First name" required>
                                        @error('first_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-7">{{ __('user.last_name') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="last_name" class="form-control form-control-sm @error('last_name') is-invalid @enderror" value="{{ old('last_name', $user->last_name) }}" placeholder="Last name" required>
                                        @error('last_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-7">{{ __('user.email') }}</label>
                                    <div class="col-lg-8">
                                        <input type="email" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" placeholder="Email address" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-header bg-light border-0 py-2">
                                <h5 class="card-title align-items-start flex-column mb-0">
                                    <span class="card-label fw-bold text-dark fs-7">
                                        <i class="ki-duotone ki-phone fs-6 text-muted me-2"><span class="path1"></span><span class="path2"></span></i>
                                        {{ __('user.contact_details') }}
                                    </span>
                                </h5>
                            </div>
                            <div class="card-body py-3">
                                <div class="row mb-3">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-7">{{ __('user.phone') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="phone" class="form-control form-control-sm @error('phone') is-invalid @enderror" value="{{ old('phone', $user->phone) }}" placeholder="Phone number">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-7">{{ __('user.phone_extension') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="phone_extension" class="form-control form-control-sm @error('phone_extension') is-invalid @enderror" value="{{ old('phone_extension', $user->phone_extension) }}" placeholder="Extension">
                                        @error('phone_extension')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Account Credentials -->
                <div class="row g-3 mb-4">
                    <div class="col-lg-12">
                        <div class="card shadow-sm">
                            <div class="card-header bg-light border-0 py-2">
                                <h5 class="card-title align-items-start flex-column mb-0">
                                    <span class="card-label fw-bold text-dark fs-7">
                                        <i class="ki-duotone ki-lock fs-6 text-muted me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                        {{ __('user.account_credentials') }}
                                    </span>
                                </h5>
                            </div>
                            <div class="card-body py-3">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-lg-4 col-form-label fw-semibold fs-7">{{ __('user.password') }}</label>
                                            <div class="col-lg-8">
                                                <div class="input-group input-group-sm">
                                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter new password">
                                                    <button type="button" class="btn btn-light btn-sm" id="generate_password_btn" title="{{ __('user.generate_password') }}">
                                                        <i class="ki-duotone ki-abstract-26 fs-5"><span class="path1"></span><span class="path2"></span></i>
                                                    </button>
                                                    <button type="button" class="btn btn-light btn-sm" id="toggle_password_btn" title="Show/Hide">
                                                        <i class="ki-duotone ki-eye fs-5" id="toggle_password_icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                                    </button>
                                                </div>
                                                <small class="text-muted fs-8">{{ __('user.leave_blank_keep_current') }}</small>
                                                @error('password')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <label class="col-lg-4 col-form-label fw-semibold fs-7">{{ __('user.password_confirmation') }}</label>
                                            <div class="col-lg-8">
                                                <input type="password" name="password_confirmation" id="confirm_password" class="form-control form-control-sm @error('password_confirmation') is-invalid @enderror" placeholder="Confirm password">
                                                @error('password_confirmation')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Roles & System Settings -->
                <div class="row g-3 mb-4">
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-header bg-light border-0 py-2">
                                <h5 class="card-title align-items-start flex-column mb-0">
                                    <span class="card-label fw-bold text-dark fs-7">
                                        <i class="ki-duotone ki-shield fs-6 text-muted me-2"><span class="path1"></span><span class="path2"></span></i>
                                        {{ __('user.roles_organization') }}
                                    </span>
                                </h5>
                            </div>
                            <div class="card-body py-3">
                                <div class="row">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-7">{{ __('user.role') }}</label>
                                    <div class="col-lg-8">
                                        <select name="roles[]" id="roles" class="form-select form-select-sm @error('roles') is-invalid @enderror" data-control="select2" data-placeholder="Select roles" multiple required>
                                            @foreach($roles as $roleValue => $roleLabel)
                                                @php
                                                    $isSelected = false;
                                                    if (old('roles')) {
                                                        $isSelected = in_array($roleValue, old('roles'));
                                                    } else {
                                                        $isSelected = in_array($roleValue, $userRoles);
                                                    }
                                                @endphp
                                                <option value="{{ $roleValue }}" {{ $isSelected ? 'selected' : '' }}>
                                                    {{ $roleLabel }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('roles')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-header bg-light border-0 py-2">
                                <h5 class="card-title align-items-start flex-column mb-0">
                                    <span class="card-label fw-bold text-dark fs-7">
                                        <i class="ki-duotone ki-setting-2 fs-6 text-muted me-2"><span class="path1"></span><span class="path2"></span></i>
                                        {{ __('user.system_settings') }}
                                    </span>
                                </h5>
                            </div>
                            <div class="card-body py-3">
                                <div class="row">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-7">{{ __('user.status') }}</label>
                                    <div class="col-lg-8">
                                        <select name="status" id="status" class="form-select form-select-sm @error('status') is-invalid @enderror" data-control="select2" data-hide-search="true" required>
                                            @foreach($statuses as $status_value)
                                                <option value="{{ $status_value }}" {{ old('status', $user->status) == $status_value ? 'selected' : '' }}>
                                                    {{ $status_value }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end pt-3">
                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-light me-3">
                        <i class="ki-duotone ki-cross fs-4"><span class="path1"></span><span class="path2"></span></i>
                        {{ __('user.cancel') }}
                    </a>
                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="ki-duotone ki-check fs-4"><span class="path1"></span></i>
                        {{ __('user.update_user') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script type="application/javascript">
            $(document).ready(function() {
                // Generate password functionality
                $('#generate_password_btn').on('click', function() {
                    const length = 16;
                    const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=";
                    let password = "";

                    password += "ABCDEFGHIJKLMNOPQRSTUVWXYZ"[Math.floor(Math.random() * 26)];
                    password += "abcdefghijklmnopqrstuvwxyz"[Math.floor(Math.random() * 26)];
                    password += "0123456789"[Math.floor(Math.random() * 10)];
                    password += "!@#$%^&*"[Math.floor(Math.random() * 8)];

                    for (let i = password.length; i < length; i++) {
                        password += charset[Math.floor(Math.random() * charset.length)];
                    }

                    password = password.split('').sort(() => Math.random() - 0.5).join('');

                    $('#password').val(password);
                    $('#confirm_password').val(password);
                    $('#password').attr('type', 'text');

                    const btn = $(this);
                    const originalHtml = btn.html();
                    btn.html('<i class="ki-duotone ki-check fs-5"><span class="path1"></span></i>');
                    btn.removeClass('btn-light').addClass('btn-success');

                    setTimeout(function() {
                        btn.html(originalHtml);
                        btn.removeClass('btn-success').addClass('btn-light');
                    }, 2000);
                });

                // Toggle password visibility
                $('#toggle_password_btn').on('click', function() {
                    const passwordInput = $('#password');
                    const icon = $('#toggle_password_icon');

                    if (passwordInput.attr('type') === 'password') {
                        passwordInput.attr('type', 'text');
                        icon.removeClass('ki-eye').addClass('ki-eye-slash');
                    } else {
                        passwordInput.attr('type', 'password');
                        icon.removeClass('ki-eye-slash').addClass('ki-eye');
                    }
                });
            });
        </script>
    @endpush
</x-app-layout>
