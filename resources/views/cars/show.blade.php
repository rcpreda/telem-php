<x-app-layout>
    <x-slot name="toolbar">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                {{ $car->make }} {{ $car->model }}
                @if($car->license_plate)
                    <span class="badge badge-light-primary ms-2 fs-7">{{ $car->license_plate }}</span>
                @endif
            </h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('cars.index') }}" class="text-muted text-hover-primary">{{ __('car.cars') }}</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">{{ $car->make }} {{ $car->model }}</li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2">
            <a href="{{ route('cars.edit', $car) }}" class="btn btn-sm btn-light-primary">
                <i class="ki-duotone ki-notepad-edit fs-4"><span class="path1"></span><span class="path2"></span></i>
                {{ __('car.edit') }}
            </a>
            <a href="{{ route('cars.index') }}" class="btn btn-sm btn-light">
                <i class="ki-duotone ki-arrow-left fs-4"><span class="path1"></span><span class="path2"></span></i>
                {{ __('car.back_to_list') }}
            </a>
        </div>
    </x-slot>

    <!-- Car Info Summary -->
    <div class="row g-5 mb-5">
        <div class="col-xl-4">
            <div class="card h-100">
                <div class="card-body d-flex flex-column justify-content-center">
                    <div class="d-flex align-items-center mb-5">
                        <div class="symbol symbol-80px symbol-circle me-5">
                            <div class="symbol-label bg-light-info text-info fw-bold fs-2x">
                                {{ strtoupper(substr($car->make, 0, 1)) }}
                            </div>
                        </div>
                        <div>
                            <h3 class="fs-2 fw-bold mb-1">{{ $car->make }} {{ $car->model }}</h3>
                            @if($car->year)
                                <span class="text-muted fs-6">{{ $car->year }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        @if($car->license_plate)
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.license_plate') }}</div>
                                <div class="fs-5 fw-bold">{{ $car->license_plate }}</div>
                            </div>
                        @endif
                        @if($car->color)
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.color') }}</div>
                                <div class="fs-5 fw-bold">{{ $car->color }}</div>
                            </div>
                        @endif
                        @if($car->fuel_type)
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.fuel_type') }}</div>
                                <div class="fs-5 fw-bold">{{ ucfirst($car->fuel_type) }}</div>
                            </div>
                        @endif
                        <div class="border border-dashed rounded min-w-100px py-3 px-4 mb-3">
                            <div class="fs-7 text-muted">{{ __('car.status') }}</div>
                            @php
                                $statusValue = $car->status?->value ?? $car->status ?? 'inactive';
                                $statusColor = match($statusValue) {
                                    'active' => 'success',
                                    'maintenance' => 'warning',
                                    default => 'danger',
                                };
                            @endphp
                            <div class="fs-5 fw-bold">
                                <span class="badge badge-light-{{ $statusColor }}">{{ ucfirst($statusValue) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card h-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">{{ __('car.tracker_info') }}</span>
                    </h3>
                </div>
                <div class="card-body pt-0">
                    @if($car->device_imei)
                        <div class="d-flex align-items-center mb-4">
                            <div class="symbol symbol-50px me-4">
                                <div class="symbol-label bg-light-success">
                                    <i class="ki-duotone ki-satellite fs-2x text-success"><span class="path1"></span><span class="path2"></span></i>
                                </div>
                            </div>
                            <div>
                                <span class="text-muted fs-7 d-block">{{ __('car.device_imei') }}</span>
                                <span class="fs-5 fw-bold text-gray-800">{{ $car->device_imei }}</span>
                            </div>
                        </div>
                        <div class="notice d-flex bg-light-success rounded border-success border border-dashed p-4">
                            <i class="ki-duotone ki-check-circle fs-2x text-success me-4"><span class="path1"></span><span class="path2"></span></i>
                            <div class="d-flex flex-stack flex-grow-1">
                                <div class="fw-semibold">
                                    <div class="fs-6 text-gray-700">{{ __('car.tracker_connected') }}</div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                            <i class="ki-duotone ki-information fs-2x text-warning me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            <div class="d-flex flex-stack flex-grow-1">
                                <div class="fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">{{ __('car.no_tracker') }}</h4>
                                    <div class="fs-6 text-gray-700">{{ __('car.no_tracker_message') }}</div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card h-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">{{ __('car.quick_stats') }}</span>
                    </h3>
                </div>
                <div class="card-body pt-0">
                    @if($dailyStats && isset($dailyStats['days']) && count($dailyStats['days']) > 0)
                        @php
                            $totalDistance = collect($dailyStats['days'])->sum('distanceKm');
                            $totalTrips = collect($dailyStats['days'])->sum('tripCount');
                            $maxSpeed = collect($dailyStats['days'])->max('speed.max');
                        @endphp
                        <div class="d-flex flex-wrap">
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.total_distance') }}</div>
                                <div class="fs-3 fw-bold text-primary">{{ number_format(abs($totalDistance), 1) }} km</div>
                            </div>
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.total_trips') }}</div>
                                <div class="fs-3 fw-bold text-success">{{ $totalTrips }}</div>
                            </div>
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.max_speed') }}</div>
                                <div class="fs-3 fw-bold text-warning">{{ $maxSpeed ?? 0 }} km/h</div>
                            </div>
                        </div>
                    @else
                        <div class="text-muted fs-6">{{ __('car.no_stats_available') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs for Trips and Daily Stats -->
    @if($car->device_imei)
    <div class="card">
        <div class="card-header card-header-stretch">
            <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#tab_trips" role="tab">
                        <i class="ki-duotone ki-route fs-4 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        {{ __('car.recent_trips') }}
                        @if($trips && isset($trips['count']))
                            <span class="badge badge-light-primary ms-2">{{ $trips['count'] }}</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab_daily_stats" role="tab">
                        <i class="ki-duotone ki-chart-line fs-4 me-2"><span class="path1"></span><span class="path2"></span></i>
                        {{ __('car.daily_statistics') }}
                    </a>
                </li>
            </ul>
        </div>

        <div class="card-body">
            <div class="tab-content">
                <!-- Trips Tab -->
                <div class="tab-pane fade show active" id="tab_trips" role="tabpanel">
                    @if($trips && isset($trips['trips']) && count($trips['trips']) > 0)
                        <div class="table-responsive">
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted">
                                        <th class="min-w-150px">{{ __('car.trip_time') }}</th>
                                        <th class="min-w-100px">{{ __('car.duration') }}</th>
                                        <th class="min-w-100px">{{ __('car.distance') }}</th>
                                        <th class="min-w-100px">{{ __('car.avg_speed') }}</th>
                                        <th class="min-w-100px">{{ __('car.max_speed') }}</th>
                                        <th class="min-w-100px">{{ __('car.fuel_used') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($trips['trips'] as $trip)
                                        <tr>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <span class="text-dark fw-bold">
                                                        {{ \Carbon\Carbon::parse($trip['startTime'])->format('d M Y') }}
                                                    </span>
                                                    <span class="text-muted fs-7">
                                                        {{ \Carbon\Carbon::parse($trip['startTime'])->format('H:i') }}
                                                        -
                                                        {{ \Carbon\Carbon::parse($trip['endTime'])->format('H:i') }}
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-info fs-7">{{ $trip['duration'] }}</span>
                                            </td>
                                            <td>
                                                <span class="text-dark fw-bold">{{ number_format($trip['distanceKm'], 1) }} km</span>
                                                @if(isset($trip['distanceEstimated']) && $trip['distanceEstimated'])
                                                    <i class="ki-duotone ki-information fs-7 text-warning" data-bs-toggle="tooltip" title="{{ __('car.distance_estimated') }}">
                                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                                    </i>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="text-muted">{{ number_format($trip['avgSpeedMoving'], 1) }} km/h</span>
                                            </td>
                                            <td>
                                                @php
                                                    $speedColor = $trip['maxSpeed'] > 100 ? 'danger' : ($trip['maxSpeed'] > 70 ? 'warning' : 'success');
                                                @endphp
                                                <span class="badge badge-light-{{ $speedColor }}">{{ $trip['maxSpeed'] }} km/h</span>
                                            </td>
                                            <td>
                                                @if($trip['fuelUsedLiters'] > 0)
                                                    <div class="d-flex flex-column">
                                                        <span class="text-dark">{{ number_format($trip['fuelUsedLiters'], 2) }} L</span>
                                                        @if($trip['fuelPer100km'] > 0)
                                                            <span class="text-muted fs-7">{{ number_format($trip['fuelPer100km'], 1) }} L/100km</span>
                                                        @endif
                                                    </div>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="notice d-flex bg-light-info rounded border-info border border-dashed p-6">
                            <i class="ki-duotone ki-information fs-2x text-info me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            <div class="d-flex flex-stack flex-grow-1">
                                <div class="fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">{{ __('car.no_trips') }}</h4>
                                    <div class="fs-6 text-gray-700">{{ __('car.no_trips_message') }}</div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Daily Stats Tab -->
                <div class="tab-pane fade" id="tab_daily_stats" role="tabpanel">
                    @if($dailyStats && isset($dailyStats['days']) && count($dailyStats['days']) > 0)
                        <div class="table-responsive">
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted">
                                        <th class="min-w-100px">{{ __('car.date') }}</th>
                                        <th class="min-w-80px">{{ __('car.trips') }}</th>
                                        <th class="min-w-100px">{{ __('car.distance') }}</th>
                                        <th class="min-w-100px">{{ __('car.fuel_used') }}</th>
                                        <th class="min-w-120px">{{ __('car.speed') }}</th>
                                        <th class="min-w-150px">{{ __('car.engine') }}</th>
                                        <th class="min-w-120px">{{ __('car.battery') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(array_reverse($dailyStats['days']) as $day)
                                        <tr>
                                            <td>
                                                <span class="text-dark fw-bold">
                                                    {{ \Carbon\Carbon::parse($day['date'])->format('d M Y') }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-primary">{{ $day['tripCount'] }}</span>
                                            </td>
                                            <td>
                                                <span class="text-dark fw-bold">{{ number_format(abs($day['distanceKm']), 1) }} km</span>
                                            </td>
                                            <td>
                                                @if(abs($day['fuelUsedLiters']) > 0)
                                                    <span class="text-dark">{{ number_format(abs($day['fuelUsedLiters']), 2) }} L</span>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($day['speed']['max'] > 0)
                                                    <div class="d-flex flex-column">
                                                        <span class="text-muted fs-7">{{ __('car.max') }}: <span class="fw-bold text-dark">{{ $day['speed']['max'] }}</span> km/h</span>
                                                        <span class="text-muted fs-7">{{ __('car.avg') }}: <span class="text-dark">{{ number_format($day['speed']['avg'], 1) }}</span> km/h</span>
                                                    </div>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($day['engine']['rpmMax'] > 0)
                                                    <div class="d-flex flex-column">
                                                        <span class="text-muted fs-7">RPM: <span class="text-dark">{{ $day['engine']['rpmMax'] }}</span></span>
                                                        <span class="text-muted fs-7">{{ __('car.coolant') }}: <span class="text-dark">{{ $day['engine']['coolantTempMax'] }}°C</span></span>
                                                    </div>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if(isset($day['voltage']['ignitionOn']['externalAvg']) && $day['voltage']['ignitionOn']['externalAvg'])
                                                    <span class="badge badge-light-success">
                                                        {{ number_format($day['voltage']['ignitionOn']['externalAvg'], 1) }}V
                                                    </span>
                                                @elseif(isset($day['voltage']['ignitionOff']['externalAvg']) && $day['voltage']['ignitionOff']['externalAvg'])
                                                    <span class="badge badge-light-secondary">
                                                        {{ number_format($day['voltage']['ignitionOff']['externalAvg'], 1) }}V
                                                    </span>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="notice d-flex bg-light-info rounded border-info border border-dashed p-6">
                            <i class="ki-duotone ki-information fs-2x text-info me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            <div class="d-flex flex-stack flex-grow-1">
                                <div class="fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">{{ __('car.no_daily_stats') }}</h4>
                                    <div class="fs-6 text-gray-700">{{ __('car.no_daily_stats_message') }}</div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif

    @push('scripts')
    <script>
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip();
        });
    </script>
    @endpush
</x-app-layout>
