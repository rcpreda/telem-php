<x-app-layout>
    <x-slot name="toolbar">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                {{ __('permissions.add_permission') }}
            </h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">{{ __('menu.settings') }}</li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('permissions.index') }}" class="text-muted text-hover-primary">{{ __('permissions.permissions') }}</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">{{ __('permissions.add_permission') }}</li>
            </ul>
        </div>
    </x-slot>

    <x-common.flash />

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('permissions.create_new_permission') }}</h3>
            <div class="card-toolbar">
                <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-light">
                    <i class="ki-duotone ki-arrow-left fs-4"><span class="path1"></span><span class="path2"></span></i>
                    {{ __('permissions.back_to_list') }}
                </a>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('permissions.store') }}" novalidate>
                @csrf

                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label required fw-semibold fs-7">{{ __('permissions.permission_name') }}</label>
                    <div class="col-lg-9">
                        <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="e.g. view-users, create-clients" required>
                        <div class="form-text">{{ __('permissions.permission_name_hint') }}</div>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('permissions.guard_name') }}</label>
                    <div class="col-lg-9">
                        <input type="text" name="guard_name" class="form-control form-control-sm @error('guard_name') is-invalid @enderror" value="{{ old('guard_name', 'web') }}" placeholder="web">
                        <div class="form-text">{{ __('permissions.guard_name_hint') }}</div>
                        @error('guard_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-light me-3">
                        {{ __('Cancel') }}
                    </a>
                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="ki-duotone ki-check fs-4"></i>
                        {{ __('permissions.create_permission') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
