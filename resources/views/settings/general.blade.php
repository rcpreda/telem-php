<x-app-layout>
    <x-slot name="toolbar">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                {{ __('General Settings') }}
            </h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">Settings</li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">General</li>
            </ul>
        </div>
    </x-slot>

    <x-common.flash />

    <div class="row">
        <div class="col-12">
            <!--begin::Site Logo Settings-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">{{ __('Site Logo') }}</h3>
                    </div>
                </div>
                <div class="card-body border-top p-9">
                    <p class="text-muted mb-6">{{ __('Upload custom logos for your site. Leave empty to use the default logos.') }}</p>

                    <form method="post" action="{{ route('settings.general.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Main Logo (Light)') }}</label>
                            <div class="col-lg-9">
                                <div class="d-flex align-items-center gap-5">
                                    <div class="symbol symbol-100px">
                                        <img src="{{ $settings->getSiteLogoUrl() }}" alt="logo" class="bg-light p-2 rounded" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <input type="file" name="site_logo" class="form-control form-control-sm @error('site_logo') is-invalid @enderror" accept="image/png,image/jpeg,image/svg+xml,.svg" />
                                        <div class="form-text">{{ __('Allowed file types: png, jpg, jpeg, svg. Max 2MB.') }}</div>
                                        @error('site_logo')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        @if($settings->site_logo)
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" name="site_logo_remove" value="1" id="site_logo_remove">
                                                <label class="form-check-label text-muted fs-7" for="site_logo_remove">
                                                    {{ __('Remove current logo') }}
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Main Logo (Dark)') }}</label>
                            <div class="col-lg-9">
                                <div class="d-flex align-items-center gap-5">
                                    <div class="symbol symbol-100px">
                                        <img src="{{ $settings->getSiteLogoDarkUrl() }}" alt="logo dark" class="bg-dark p-2 rounded" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <input type="file" name="site_logo_dark" class="form-control form-control-sm @error('site_logo_dark') is-invalid @enderror" accept="image/png,image/jpeg,image/svg+xml,.svg" />
                                        <div class="form-text">{{ __('Used when dark mode is active.') }}</div>
                                        @error('site_logo_dark')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        @if($settings->site_logo_dark)
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" name="site_logo_dark_remove" value="1" id="site_logo_dark_remove">
                                                <label class="form-check-label text-muted fs-7" for="site_logo_dark_remove">
                                                    {{ __('Remove current logo') }}
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Small Logo (Light)') }}</label>
                            <div class="col-lg-9">
                                <div class="d-flex align-items-center gap-5">
                                    <div class="symbol symbol-50px">
                                        <img src="{{ $settings->getSiteLogoSmallUrl() }}" alt="logo small" class="bg-light p-2 rounded" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <input type="file" name="site_logo_small" class="form-control form-control-sm @error('site_logo_small') is-invalid @enderror" accept="image/png,image/jpeg,image/svg+xml,.svg" />
                                        <div class="form-text">{{ __('Used when sidebar is minimized.') }}</div>
                                        @error('site_logo_small')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        @if($settings->site_logo_small)
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" name="site_logo_small_remove" value="1" id="site_logo_small_remove">
                                                <label class="form-check-label text-muted fs-7" for="site_logo_small_remove">
                                                    {{ __('Remove current logo') }}
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Small Logo (Dark)') }}</label>
                            <div class="col-lg-9">
                                <div class="d-flex align-items-center gap-5">
                                    <div class="symbol symbol-50px">
                                        <img src="{{ $settings->getSiteLogoSmallDarkUrl() }}" alt="logo small dark" class="bg-dark p-2 rounded" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <input type="file" name="site_logo_small_dark" class="form-control form-control-sm @error('site_logo_small_dark') is-invalid @enderror" accept="image/png,image/jpeg,image/svg+xml,.svg" />
                                        <div class="form-text">{{ __('Used when sidebar is minimized and dark mode is active.') }}</div>
                                        @error('site_logo_small_dark')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        @if($settings->site_logo_small_dark)
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" name="site_logo_small_dark_remove" value="1" id="site_logo_small_dark_remove">
                                                <label class="form-check-label text-muted fs-7" for="site_logo_small_dark_remove">
                                                    {{ __('Remove current logo') }}
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-primary">
                                <i class="ki-duotone ki-check fs-4"></i>
                                {{ __('Save Settings') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!--end::Site Logo Settings-->
        </div>
    </div>
</x-app-layout>
