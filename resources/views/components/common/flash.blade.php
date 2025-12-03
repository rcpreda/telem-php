@if (session()->has('success'))
<div
    class="alert alert-dismissible bg-light-success d-flex flex-column flex-sm-row p-5 mb-10"
    role="alert"
    x-data="{ show: true }"
    x-init="setTimeout(() => show = false, 8000)"
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
>
    <div class="d-flex flex-column pe-0 pe-sm-10">
        <div class="d-flex align-items-center mb-2">
            <i class="ki-duotone ki-check-circle fs-2x text-success me-3">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <h4 class="mb-0 text-success">{{ __('Success') }}</h4>
        </div>
        <span class="fw-semibold text-gray-700">{{ session('success') }}</span>
    </div>
    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
        <i class="ki-duotone ki-cross fs-1 text-success">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </button>
</div>
@endif

@if (session()->has('error'))
<div
    class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mb-10"
    role="alert"
    x-data="{ show: true }"
    x-init="setTimeout(() => show = false, 10000)"
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
>
    <div class="d-flex flex-column pe-0 pe-sm-10">
        <div class="d-flex align-items-center mb-2">
            <i class="ki-duotone ki-information fs-2x text-danger me-3">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
            </i>
            <h4 class="mb-0 text-danger">{{ __('Access Denied') }}</h4>
        </div>
        <span class="fw-semibold text-gray-700">{!! session('error') !!}</span>
    </div>
    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
        <i class="ki-duotone ki-cross fs-1 text-danger">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </button>
</div>
@endif

@if (session()->has('warning'))
<div
    class="alert alert-dismissible bg-light-warning d-flex flex-column flex-sm-row p-5 mb-10"
    role="alert"
    x-data="{ show: true }"
    x-init="setTimeout(() => show = false, 8000)"
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
>
    <div class="d-flex flex-column pe-0 pe-sm-10">
        <div class="d-flex align-items-center mb-2">
            <i class="ki-duotone ki-shield-tick fs-2x text-warning me-3">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
            <h4 class="mb-0 text-warning">{{ __('Warning') }}</h4>
        </div>
        <span class="fw-semibold text-gray-700">{!! session('warning') !!}</span>
    </div>
    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
        <i class="ki-duotone ki-cross fs-1 text-warning">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </button>
</div>
@endif

@if (session()->has('info'))
<div
    class="alert alert-dismissible bg-light-info d-flex flex-column flex-sm-row p-5 mb-10"
    role="alert"
    x-data="{ show: true }"
    x-init="setTimeout(() => show = false, 8000)"
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
>
    <div class="d-flex flex-column pe-0 pe-sm-10">
        <div class="d-flex align-items-center mb-2">
            <i class="ki-duotone ki-information-5 fs-2x text-info me-3">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
            </i>
            <h4 class="mb-0 text-info">{{ __('Information') }}</h4>
        </div>
        <span class="fw-semibold text-gray-700">{!! session('info') !!}</span>
    </div>
    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
        <i class="ki-duotone ki-cross fs-1 text-info">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </button>
</div>
@endif
