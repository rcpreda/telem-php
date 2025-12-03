<x-app-layout>
    <x-slot name="toolbar">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                {{ __('My Profile') }}
            </h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">Profile</li>
            </ul>
        </div>
    </x-slot>

    <x-common.flash />

    <div class="row">
        <div class="col-12">
            <!--begin::Profile Information-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">{{ __('Profile Information') }}</h3>
                    </div>
                </div>
                <div class="card-body border-top p-9">
                    <p class="text-muted mb-6">{{ __("Update your account's profile information and email address.") }}</p>

                    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Avatar') }}</label>
                            <div class="col-lg-9">
                                <div class="d-flex align-items-center gap-5">
                                    <div class="symbol symbol-100px symbol-circle">
                                        <img src="{{ $user->avatar_url }}" alt="avatar" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <input type="file" name="avatar" class="form-control form-control-sm @error('avatar') is-invalid @enderror" accept=".png,.jpg,.jpeg" />
                                        <div class="form-text">{{ __('Allowed file types: png, jpg, jpeg. Max 2MB.') }}</div>
                                        @error('avatar')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        @if($user->avatar)
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" name="avatar_remove" value="1" id="avatar_remove">
                                                <label class="form-check-label text-muted fs-7" for="avatar_remove">
                                                    {{ __('Remove current avatar') }}
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-7">{{ __('Name') }}</label>
                            <div class="col-lg-9">
                                <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name', $user->name ?? $user->first_name . ' ' . $user->last_name) }}" required autofocus />
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-7">{{ __('Email') }}</label>
                            <div class="col-lg-9">
                                <input type="email" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div class="mt-3">
                                        <p class="text-warning fs-7 mb-2">
                                            {{ __('Your email address is unverified.') }}
                                        </p>
                                        @if (session('status') === 'verification-link-sent')
                                            <p class="text-success fs-7 mt-2">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-primary">
                                <i class="ki-duotone ki-check fs-4"></i>
                                {{ __('Save Changes') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!--end::Profile Information-->

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <!--begin::Email Verification-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0 text-warning">{{ __('Email Verification') }}</h3>
                    </div>
                </div>
                <div class="card-body border-top p-9">
                    <p class="text-muted mb-4">{{ __('Your email address is unverified. Please verify your email to access all features.') }}</p>

                    @if (session('status') === 'verification-link-sent')
                        <div class="alert alert-success mb-4">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-warning">
                            <i class="ki-duotone ki-send fs-4"></i>
                            {{ __('Resend Verification Email') }}
                        </button>
                    </form>
                </div>
            </div>
            <!--end::Email Verification-->
            @endif

            <!--begin::Update Password-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">{{ __('Update Password') }}</h3>
                    </div>
                </div>
                <div class="card-body border-top p-9">
                    <p class="text-muted mb-6">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>

                    <form method="post" action="{{ route('password.update') }}">
                        @csrf
                        @method('put')

                        <div class="row mb-4">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-7">{{ __('Current Password') }}</label>
                            <div class="col-lg-9">
                                <input type="password" name="current_password" class="form-control form-control-sm @error('current_password', 'updatePassword') is-invalid @enderror" autocomplete="current-password" />
                                @error('current_password', 'updatePassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-7">{{ __('New Password') }}</label>
                            <div class="col-lg-9">
                                <input type="password" name="password" class="form-control form-control-sm @error('password', 'updatePassword') is-invalid @enderror" autocomplete="new-password" />
                                @error('password', 'updatePassword')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-lg-3 col-form-label required fw-semibold fs-7">{{ __('Confirm Password') }}</label>
                            <div class="col-lg-9">
                                <input type="password" name="password_confirmation" class="form-control form-control-sm" autocomplete="new-password" />
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-primary">
                                <i class="ki-duotone ki-lock fs-4"></i>
                                {{ __('Update Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!--end::Update Password-->

            <!--begin::Delete Account-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0 text-danger">{{ __('Delete Account') }}</h3>
                    </div>
                </div>
                <div class="card-body border-top p-9">
                    <div class="notice d-flex bg-light-danger rounded border-danger border border-dashed p-6 mb-6">
                        <i class="ki-duotone ki-information-5 fs-2tx text-danger me-4">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                        <div class="d-flex flex-stack flex-grow-1">
                            <div class="fw-semibold">
                                <div class="fs-6 text-gray-700">
                                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                        <i class="ki-duotone ki-trash fs-4"></i>
                        {{ __('Delete Account') }}
                    </button>
                </div>
            </div>
            <!--end::Delete Account-->
        </div>
    </div>

    <!--begin::Delete Account Modal-->
    <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">{{ __('Delete Account') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')
                    <div class="modal-body">
                        <p class="mb-4">{{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>

                        <div class="mb-3">
                            <label class="form-label fs-7 required">{{ __('Password') }}</label>
                            <input type="password" name="password" class="form-control form-control-sm @error('password', 'userDeletion') is-invalid @enderror" placeholder="{{ __('Enter your password') }}" required />
                            @error('password', 'userDeletion')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                        <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete Account') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end::Delete Account Modal-->
</x-app-layout>
