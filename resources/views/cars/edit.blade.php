<x-app-layout>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('car.edit_car') }}: {{ $car->make }} {{ $car->model }}</h3>
            <div class="card-toolbar">
                <a href="{{ route('cars.index') }}" class="btn btn-sm btn-light">
                    <i class="ki-duotone ki-arrow-left fs-4"><span class="path1"></span><span class="path2"></span></i>
                    {{ __('car.back_to_list') }}
                </a>
            </div>
        </div>

        <div class="card-body">
            <x-common.flash/>

            <form method="POST" action="{{ route('cars.update', $car) }}" novalidate>
                @csrf
                @method('PUT')

                <!-- Vehicle Information -->
                <div class="row g-3 mb-4">
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-header bg-light border-0 py-2">
                                <h5 class="card-title align-items-start flex-column mb-0">
                                    <span class="card-label fw-bold text-dark fs-7">
                                        <i class="ki-duotone ki-car fs-6 text-muted me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                        {{ __('car.vehicle_info') }}
                                    </span>
                                </h5>
                            </div>
                            <div class="card-body py-3">
                                <div class="row mb-3">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-7">{{ __('car.make') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="make" class="form-control form-control-sm @error('make') is-invalid @enderror" value="{{ old('make', $car->make) }}" placeholder="{{ __('car.make_placeholder') }}" required>
                                        @error('make')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-7">{{ __('car.model') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="model" class="form-control form-control-sm @error('model') is-invalid @enderror" value="{{ old('model', $car->model) }}" placeholder="{{ __('car.model_placeholder') }}" required>
                                        @error('model')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-7">{{ __('car.year') }}</label>
                                    <div class="col-lg-8">
                                        <input type="number" name="year" class="form-control form-control-sm @error('year') is-invalid @enderror" value="{{ old('year', $car->year) }}" placeholder="{{ __('car.year_placeholder') }}" min="1900" max="{{ date('Y') + 1 }}">
                                        @error('year')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-7">{{ __('car.color') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="color" class="form-control form-control-sm @error('color') is-invalid @enderror" value="{{ old('color', $car->color) }}" placeholder="{{ __('car.color_placeholder') }}">
                                        @error('color')
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
                                        <i class="ki-duotone ki-document fs-6 text-muted me-2"><span class="path1"></span><span class="path2"></span></i>
                                        {{ __('car.registration_details') }}
                                    </span>
                                </h5>
                            </div>
                            <div class="card-body py-3">
                                <div class="row mb-3">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-7">{{ __('car.license_plate') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="license_plate" class="form-control form-control-sm @error('license_plate') is-invalid @enderror" value="{{ old('license_plate', $car->license_plate) }}" placeholder="{{ __('car.license_plate_placeholder') }}">
                                        @error('license_plate')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-7">{{ __('car.vin') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="vin" class="form-control form-control-sm @error('vin') is-invalid @enderror" value="{{ old('vin', $car->vin) }}" placeholder="{{ __('car.vin_placeholder') }}">
                                        @error('vin')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-7">{{ __('car.mileage') }}</label>
                                    <div class="col-lg-8">
                                        <input type="number" name="mileage" class="form-control form-control-sm @error('mileage') is-invalid @enderror" value="{{ old('mileage', $car->mileage) }}" placeholder="{{ __('car.mileage_placeholder') }}" min="0">
                                        @error('mileage')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tracker & Settings -->
                <div class="row g-3 mb-4">
                    <div class="col-lg-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-header bg-light border-0 py-2">
                                <h5 class="card-title align-items-start flex-column mb-0">
                                    <span class="card-label fw-bold text-dark fs-7">
                                        <i class="ki-duotone ki-satellite fs-6 text-muted me-2"><span class="path1"></span><span class="path2"></span></i>
                                        {{ __('car.tracker_info') }}
                                    </span>
                                </h5>
                            </div>
                            <div class="card-body py-3">
                                <div class="row">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-7">{{ __('car.device_imei') }}</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="device_imei" class="form-control form-control-sm @error('device_imei') is-invalid @enderror" value="{{ old('device_imei', $car->device_imei) }}" placeholder="{{ __('car.device_imei_placeholder') }}">
                                        @error('device_imei')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text text-muted">{{ __('car.device_imei_help') }}</div>
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
                                        {{ __('car.settings') }}
                                    </span>
                                </h5>
                            </div>
                            <div class="card-body py-3">
                                <div class="row mb-3">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-7">{{ __('car.fuel_type') }}</label>
                                    <div class="col-lg-8">
                                        <select name="fuel_type" class="form-select form-select-sm @error('fuel_type') is-invalid @enderror" data-control="select2" data-hide-search="true" data-placeholder="{{ __('car.select_fuel_type') }}">
                                            <option value="">{{ __('car.select_fuel_type') }}</option>
                                            @foreach($fuelTypes as $fuelValue => $fuelLabel)
                                                <option value="{{ $fuelValue }}" {{ old('fuel_type', $car->fuel_type) == $fuelValue ? 'selected' : '' }}>
                                                    {{ $fuelLabel }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('fuel_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-7">{{ __('car.fuel_consumption') }}</label>
                                    <div class="col-lg-8">
                                        <div class="input-group input-group-sm">
                                            <input type="number" name="fuel_consumption" step="0.1" min="0" max="99.9" class="form-control form-control-sm @error('fuel_consumption') is-invalid @enderror" value="{{ old('fuel_consumption', $car->fuel_consumption) }}" placeholder="{{ __('car.fuel_consumption_placeholder') }}">
                                            <span class="input-group-text">L/100km</span>
                                        </div>
                                        @error('fuel_consumption')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text text-muted">{{ __('car.fuel_consumption_help') }}</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-7">{{ __('car.status') }}</label>
                                    <div class="col-lg-8">
                                        <select name="status" class="form-select form-select-sm @error('status') is-invalid @enderror" data-control="select2" data-hide-search="true" required>
                                            @foreach($statuses as $status_value)
                                                <option value="{{ $status_value }}" {{ old('status', $car->status?->value ?? $car->status) == $status_value ? 'selected' : '' }}>
                                                    {{ ucfirst($status_value) }}
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

                <!-- Notes -->
                <div class="row g-3 mb-4">
                    <div class="col-lg-12">
                        <div class="card shadow-sm">
                            <div class="card-header bg-light border-0 py-2">
                                <h5 class="card-title align-items-start flex-column mb-0">
                                    <span class="card-label fw-bold text-dark fs-7">
                                        <i class="ki-duotone ki-notepad fs-6 text-muted me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                        {{ __('car.additional_notes') }}
                                    </span>
                                </h5>
                            </div>
                            <div class="card-body py-3">
                                <textarea name="notes" class="form-control form-control-sm @error('notes') is-invalid @enderror" rows="3" placeholder="{{ __('car.notes_placeholder') }}">{{ old('notes', $car->notes) }}</textarea>
                                @error('notes')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end pt-3">
                    <a href="{{ route('cars.index') }}" class="btn btn-sm btn-light me-3">
                        <i class="ki-duotone ki-cross fs-4"><span class="path1"></span><span class="path2"></span></i>
                        {{ __('car.cancel') }}
                    </a>
                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="ki-duotone ki-check fs-4"><span class="path1"></span></i>
                        {{ __('car.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
