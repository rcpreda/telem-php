<x-app-layout>
    <x-slot name="toolbar">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                {{ __('Contact Settings') }}
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
                <li class="breadcrumb-item text-muted">Contact</li>
            </ul>
        </div>
    </x-slot>

    <x-common.flash />

    <div class="row">
        <div class="col-12">
            <!--begin::Contact Information-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">{{ __('Contact Information') }}</h3>
                    </div>
                </div>
                <div class="card-body border-top p-9">
                    <p class="text-muted mb-6">{{ __('Manage contact information displayed on your website footer and contact page.') }}</p>

                    <form method="post" action="{{ route('settings.contact.update') }}">
                        @csrf
                        @method('patch')

                        <!-- Email -->
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Email') }}</label>
                            <div class="col-lg-9">
                                <input type="email" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{ old('email', $settings->email) }}" />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Phone') }}</label>
                            <div class="col-lg-9">
                                <input type="text" name="phone" class="form-control form-control-sm @error('phone') is-invalid @enderror" value="{{ old('phone', $settings->phone) }}" />
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Address Line 1 -->
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Address Line 1') }}</label>
                            <div class="col-lg-9">
                                <input type="text" name="address_line1" class="form-control form-control-sm @error('address_line1') is-invalid @enderror" value="{{ old('address_line1', $settings->address_line1) }}" />
                                @error('address_line1')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Address Line 2 -->
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Address Line 2') }}</label>
                            <div class="col-lg-9">
                                <input type="text" name="address_line2" class="form-control form-control-sm @error('address_line2') is-invalid @enderror" value="{{ old('address_line2', $settings->address_line2) }}" />
                                @error('address_line2')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- City, State, Zip -->
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('City / State / ZIP') }}</label>
                            <div class="col-lg-9">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <input type="text" name="city" class="form-control form-control-sm @error('city') is-invalid @enderror" placeholder="City" value="{{ old('city', $settings->city) }}" />
                                        @error('city')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="state" class="form-control form-control-sm @error('state') is-invalid @enderror" placeholder="State" value="{{ old('state', $settings->state) }}" />
                                        @error('state')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="zip" class="form-control form-control-sm @error('zip') is-invalid @enderror" placeholder="ZIP" value="{{ old('zip', $settings->zip) }}" />
                                        @error('zip')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Country -->
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Country') }}</label>
                            <div class="col-lg-9">
                                <input type="text" name="country" class="form-control form-control-sm @error('country') is-invalid @enderror" value="{{ old('country', $settings->country) }}" />
                                @error('country')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Business Hours -->
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Business Hours') }}</label>
                            <div class="col-lg-9">
                                <input type="text" name="business_hours" class="form-control form-control-sm @error('business_hours') is-invalid @enderror" value="{{ old('business_hours', $settings->business_hours) }}" placeholder="Monday - Friday: 9:00 AM - 6:00 PM" />
                                @error('business_hours')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="separator separator-dashed my-6"></div>

                        <!-- Social Media -->
                        <h4 class="fw-bold mb-6">{{ __('Social Media Links') }}</h4>

                        <!-- Facebook -->
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Facebook URL') }}</label>
                            <div class="col-lg-9">
                                <input type="url" name="facebook_url" class="form-control form-control-sm @error('facebook_url') is-invalid @enderror" value="{{ old('facebook_url', $settings->facebook_url) }}" placeholder="https://facebook.com/yourpage" />
                                @error('facebook_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Twitter -->
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Twitter URL') }}</label>
                            <div class="col-lg-9">
                                <input type="url" name="twitter_url" class="form-control form-control-sm @error('twitter_url') is-invalid @enderror" value="{{ old('twitter_url', $settings->twitter_url) }}" placeholder="https://twitter.com/yourhandle" />
                                @error('twitter_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- LinkedIn -->
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('LinkedIn URL') }}</label>
                            <div class="col-lg-9">
                                <input type="url" name="linkedin_url" class="form-control form-control-sm @error('linkedin_url') is-invalid @enderror" value="{{ old('linkedin_url', $settings->linkedin_url) }}" placeholder="https://linkedin.com/company/yourcompany" />
                                @error('linkedin_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Instagram -->
                        <div class="row mb-6">
                            <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('Instagram URL') }}</label>
                            <div class="col-lg-9">
                                <input type="url" name="instagram_url" class="form-control form-control-sm @error('instagram_url') is-invalid @enderror" value="{{ old('instagram_url', $settings->instagram_url) }}" placeholder="https://instagram.com/yourprofile" />
                                @error('instagram_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Save Changes') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
