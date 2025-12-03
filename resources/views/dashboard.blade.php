<x-app-layout>
    <x-slot name="title">Dashboard</x-slot>

    <x-common.flash />

    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <div class="card card-flush h-xl-100">
                <div class="card-header pt-7">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Welcome</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">CRM Admin Dashboard</span>
                    </h3>
                </div>
                <div class="card-body d-flex flex-column justify-content-center text-center">
                    <div class="mb-7">
                        <i class="ki-duotone ki-abstract-26 fs-5x text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div class="fs-5 fw-bold text-gray-800 mb-3">
                        {{ __("You're logged in!") }}
                    </div>
                    <div class="text-gray-400 fw-semibold">
                        Welcome to your CRM Admin Dashboard
                    </div>
                </div>
            </div>
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <div class="card card-flush h-xl-100">
                <div class="card-header pt-7">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Quick Stats</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Overview</span>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-5">
                        <div class="symbol symbol-50px me-3">
                            <span class="symbol-label bg-light-primary">
                                <i class="ki-duotone ki-people fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </div>
                        <div class="d-flex flex-column">
                            <span class="text-gray-800 fw-bold fs-6">Users</span>
                            <span class="text-gray-400 fw-semibold">Manage system users</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

</x-app-layout>
