<x-app-layout>
    <x-slot name="toolbar">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                {{ __('permissions.edit_permission') }}
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
                <li class="breadcrumb-item text-muted">{{ ucwords(str_replace('-', ' ', $permission->name)) }}</li>
            </ul>
        </div>
    </x-slot>

    <x-common.flash />

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('permissions.edit_permission') }}: {{ ucwords(str_replace('-', ' ', $permission->name)) }}</h3>
            <div class="card-toolbar">
                <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-light">
                    <i class="ki-duotone ki-arrow-left fs-4"><span class="path1"></span><span class="path2"></span></i>
                    {{ __('permissions.back_to_list') }}
                </a>
            </div>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('permissions.update', $permission) }}" novalidate>
                @csrf
                @method('PUT')

                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label required fw-semibold fs-7">{{ __('permissions.permission_name') }}</label>
                    <div class="col-lg-9">
                        <input type="text" name="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name', $permission->name) }}" placeholder="e.g. view-users, create-clients" required>
                        <div class="form-text">{{ __('permissions.permission_name_hint') }}</div>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('permissions.guard_name') }}</label>
                    <div class="col-lg-9">
                        <input type="text" name="guard_name" class="form-control form-control-sm @error('guard_name') is-invalid @enderror" value="{{ old('guard_name', $permission->guard_name) }}" placeholder="web">
                        <div class="form-text">{{ __('permissions.guard_name_hint') }}</div>
                        @error('guard_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                @if($roles->isNotEmpty())
                <div class="row mb-6">
                    <label class="col-lg-3 col-form-label fw-semibold fs-7">{{ __('permissions.assign_to_roles') }}</label>
                    <div class="col-lg-9">
                        <div class="border rounded p-5">
                            <div class="row">
                                @foreach($roles as $role)
                                <div class="col-md-6 mb-3">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->id }}" id="role_{{ $role->id }}" {{ in_array($role->id, old('roles', $permissionRoles)) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="role_{{ $role->id }}">
                                            {{ ucwords(str_replace('-', ' ', $role->name)) }}
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-text">{{ __('permissions.assign_to_roles_hint') }}</div>
                        @error('roles')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                @endif

                <div class="d-flex justify-content-end">
                    <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-light me-3">
                        {{ __('Cancel') }}
                    </a>
                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="ki-duotone ki-check fs-4"></i>
                        {{ __('permissions.update_permission') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
