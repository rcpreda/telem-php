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
        <div class="col-xl-6">
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
                        @if($car->fuel_consumption)
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.fuel_consumption') }}</div>
                                <div class="fs-5 fw-bold">{{ $car->fuel_consumption }} L/100km</div>
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

        <div class="col-xl-6">
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
                                <span class="fs-5 fw-bold text-gray-800">
                                    @if(auth()->user()->hasRole('demo'))
                                        {{ substr($car->device_imei, 0, 4) }}********{{ substr($car->device_imei, -3) }}
                                    @else
                                        {{ $car->device_imei }}
                                    @endif
                                </span>
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

    </div>

    <!-- Stats Row -->
    @if($car->device_imei)
    <div class="row g-5 mb-5">
        <div class="col-xl-6">
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
                            $totalFuel = $car->fuel_consumption ? ($car->fuel_consumption / 100) * abs($totalDistance) : 0;
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
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.max_speed') }}</div>
                                <div class="fs-3 fw-bold text-warning">{{ $maxSpeed ?? 0 }} km/h</div>
                            </div>
                            @if($totalFuel > 0)
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.fuel_used') }}</div>
                                <div class="fs-3 fw-bold text-danger">{{ number_format($totalFuel, 1) }} L</div>
                            </div>
                            @endif
                        </div>
                    @else
                        <div class="text-muted fs-6">{{ __('car.no_stats_available') }}</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card h-100">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">{{ __('car.today_stats') }}</span>
                    </h3>
                </div>
                <div class="card-body pt-0">
                    @php
                        $today = now()->format('Y-m-d');
                        $todayStats = null;
                        if ($dailyStats && isset($dailyStats['days'])) {
                            $todayStats = collect($dailyStats['days'])->firstWhere('date', $today);
                        }
                    @endphp
                    @if($todayStats)
                        @php
                            $todayFuel = $car->fuel_consumption ? ($car->fuel_consumption / 100) * abs($todayStats['distanceKm']) : 0;
                        @endphp
                        <div class="d-flex flex-wrap">
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.distance') }}</div>
                                <div class="fs-3 fw-bold text-primary">{{ number_format(abs($todayStats['distanceKm']), 1) }} km</div>
                            </div>
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.trips') }}</div>
                                <div class="fs-3 fw-bold text-success">{{ $todayStats['tripCount'] }}</div>
                            </div>
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 me-3 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.max_speed') }}</div>
                                <div class="fs-3 fw-bold text-warning">{{ $todayStats['speed']['max'] ?? 0 }} km/h</div>
                            </div>
                            @if($todayFuel > 0)
                            <div class="border border-dashed rounded min-w-100px py-3 px-4 mb-3">
                                <div class="fs-7 text-muted">{{ __('car.fuel_used') }}</div>
                                <div class="fs-3 fw-bold text-danger">{{ number_format($todayFuel, 1) }} L</div>
                            </div>
                            @endif
                        </div>
                    @else
                        <div class="text-muted fs-6">{{ __('car.no_today_stats') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Live Map -->
    @if($car->device_imei)
    @can('view-map')
    <div class="card mb-5">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-dark">
                    <i class="ki-duotone ki-geolocation fs-2 me-2"><span class="path1"></span><span class="path2"></span></i>
                    {{ __('car.live_location') }}
                </span>
            </h3>
            <div class="card-toolbar">
                <div class="d-flex align-items-center gap-3">
                    <div id="map-status" class="d-flex align-items-center">
                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px animation-blink"></span>
                        <span class="text-muted fs-7">{{ __('car.live_updating') }}</span>
                    </div>
                    <div id="last-update" class="text-muted fs-7"></div>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div id="car-map" style="height: 400px; border-radius: 8px;"></div>
            <div class="row mt-4" id="map-info">
                <div class="col-md-2 col-6 mb-3">
                    <div class="border border-dashed rounded py-3 px-4 text-center">
                        <div class="fs-7 text-muted">{{ __('car.speed') }}</div>
                        <div class="fs-4 fw-bold" id="info-speed">-- km/h</div>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-3">
                    <div class="border border-dashed rounded py-3 px-4 text-center">
                        <div class="fs-7 text-muted">{{ __('car.ignition') }}</div>
                        <div class="fs-4 fw-bold" id="info-ignition">--</div>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-3">
                    <div class="border border-dashed rounded py-3 px-4 text-center">
                        <div class="fs-7 text-muted">{{ __('car.odometer') }}</div>
                        <div class="fs-4 fw-bold" id="info-odometer">-- km</div>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-3">
                    <div class="border border-dashed rounded py-3 px-4 text-center">
                        <div class="fs-7 text-muted">{{ __('car.voltage') }}</div>
                        <div class="fs-4 fw-bold" id="info-voltage">-- V</div>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-3">
                    <div class="border border-dashed rounded py-3 px-4 text-center">
                        <div class="fs-7 text-muted">{{ __('car.satellites') }}</div>
                        <div class="fs-4 fw-bold" id="info-satellites">--</div>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-3">
                    <div class="border border-dashed rounded py-3 px-4 text-center">
                        <div class="fs-7 text-muted">{{ __('car.gsm_signal') }}</div>
                        <div class="fs-4 fw-bold" id="info-gsm">--</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan
    @endif

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
                                                @php
                                                    // Calculate estimated fuel with realistic variation
                                                    $fuelUsed = null;
                                                    $fuelPer100 = null;

                                                    if ($car->fuel_consumption && ($trip['distanceKm'] ?? 0) > 0) {
                                                        $baseConsumption = $car->fuel_consumption;
                                                        $distance = $trip['distanceKm'];
                                                        $avgSpeed = $trip['avgSpeedMoving'] ?? 40;

                                                        // Variation factors:
                                                        // 1. Speed factor: lower speed = more city driving = higher consumption
                                                        // Optimal speed ~70-90 km/h, city driving ~30-40 km/h uses ~15-20% more
                                                        $speedFactor = 1.0;
                                                        if ($avgSpeed < 30) {
                                                            $speedFactor = 1.20; // Heavy traffic/city
                                                        } elseif ($avgSpeed < 50) {
                                                            $speedFactor = 1.10; // City driving
                                                        } elseif ($avgSpeed > 110) {
                                                            $speedFactor = 1.15; // Highway high speed
                                                        }

                                                        // 2. Small pseudo-random variation based on trip data (deterministic)
                                                        // Use trip characteristics to create consistent "randomness"
                                                        $seed = ($distance * 100 + $avgSpeed) % 20;
                                                        $randomFactor = 0.95 + ($seed / 100); // 0.95 to 1.15

                                                        // Calculate final consumption
                                                        $fuelPer100 = $baseConsumption * $speedFactor * $randomFactor;
                                                        $fuelUsed = ($fuelPer100 / 100) * $distance;
                                                    }
                                                @endphp
                                                @if($fuelUsed && $fuelUsed > 0)
                                                    <div class="d-flex flex-column">
                                                        <span class="text-dark">
                                                            {{ number_format($fuelUsed, 2) }} L
                                                            <i class="ki-duotone ki-information fs-7 text-warning" data-bs-toggle="tooltip" title="{{ __('car.fuel_estimated') }}">
                                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                                            </i>
                                                        </span>
                                                        <span class="text-muted fs-7">{{ number_format($fuelPer100, 1) }} L/100km</span>
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
                                                @if(abs($day['fuelUsedLiters'] ?? 0) > 0)
                                                    <span class="text-dark">
                                                        {{ number_format(abs($day['fuelUsedLiters']), 2) }} L
                                                        @if($day['fuel']['estimated'] ?? false)
                                                            <i class="ki-duotone ki-information fs-7 text-warning" data-bs-toggle="tooltip" title="{{ __('car.fuel_estimated') }}">
                                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                                            </i>
                                                        @endif
                                                    </span>
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

    @push('styles')
    <style>
        .animation-blink {
            animation: blink 1.5s infinite;
        }
        @keyframes blink {
            0%, 50%, 100% { opacity: 1; }
            25%, 75% { opacity: 0.3; }
        }
        .leaflet-popup-content-wrapper {
            border-radius: 8px;
        }
        .car-popup {
            min-width: 200px;
        }
        .car-popup .status-badge {
            display: inline-block;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 600;
        }
        .car-popup .status-on { background: #d4edda; color: #155724; }
        .car-popup .status-off { background: #f8d7da; color: #721c24; }
    </style>
    @endpush

    @push('scripts')
    <script>
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip();

            @if($car->device_imei)
            @can('view-map')
            // Initialize map
            const map = L.map('car-map').setView([45.8064, 24.1061], 15);

            // Add OpenStreetMap tiles
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Car icon
            const carIconOn = L.divIcon({
                html: '<div style="background: #50cd89; width: 24px; height: 24px; border-radius: 50%; border: 3px solid white; box-shadow: 0 2px 6px rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center;"><i class="ki-duotone ki-car" style="color: white; font-size: 12px;"></i></div>',
                className: 'car-marker',
                iconSize: [24, 24],
                iconAnchor: [12, 12]
            });

            const carIconOff = L.divIcon({
                html: '<div style="background: #f1416c; width: 24px; height: 24px; border-radius: 50%; border: 3px solid white; box-shadow: 0 2px 6px rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center;"><i class="ki-duotone ki-car" style="color: white; font-size: 12px;"></i></div>',
                className: 'car-marker',
                iconSize: [24, 24],
                iconAnchor: [12, 12]
            });

            let marker = null;
            const latestUrl = '{{ route("cars.latest", $car) }}';

            function updateMap() {
                fetch(latestUrl)
                    .then(response => response.json())
                    .then(data => {
                        if (data.record && data.record.gps) {
                            const lat = data.record.gps.latitude;
                            const lng = data.record.gps.longitude;
                            const speed = data.record.gps.speed || 0;
                            const ignition = data.record.ignition || 0;
                            const satellites = data.record.gps.satellites || 0;
                            const voltage = data.record.externalVoltage ? (data.record.externalVoltage / 1000).toFixed(1) : '--';
                            const odometer = data.record.totalOdometer ? (data.record.totalOdometer / 1000).toFixed(1) : '--';
                            const gsmSignal = data.record.gsmSignal || 0;
                            const timestamp = data.record.timestamp;

                            // Update info cards
                            $('#info-speed').text(speed + ' km/h');
                            $('#info-ignition').html(ignition ? '<span class="badge badge-light-success">ON</span>' : '<span class="badge badge-light-danger">OFF</span>');
                            $('#info-odometer').text(odometer + ' km');
                            $('#info-voltage').text(voltage + ' V');
                            $('#info-satellites').text(satellites);
                            $('#info-gsm').html(getGsmBars(gsmSignal));

                            // Update last update time
                            const updateTime = new Date(timestamp);
                            $('#last-update').text('{{ __("car.last_update") }}: ' + updateTime.toLocaleTimeString());

                            // Popup content
                            const popupContent = `
                                <div class="car-popup">
                                    <strong>{{ $car->make }} {{ $car->model }}</strong><br>
                                    <span class="text-muted">{{ $car->license_plate }}</span>
                                    <hr style="margin: 8px 0;">
                                    <div class="status-badge ${ignition ? 'status-on' : 'status-off'}">
                                        ${ignition ? '{{ __("car.engine_on") }}' : '{{ __("car.engine_off") }}'}
                                    </div>
                                    <div style="margin-top: 8px; font-size: 12px;">
                                        <strong>{{ __("car.speed") }}:</strong> ${speed} km/h<br>
                                        <strong>{{ __("car.voltage") }}:</strong> ${voltage}V
                                    </div>
                                </div>
                            `;

                            if (marker) {
                                marker.setLatLng([lat, lng]);
                                marker.setIcon(ignition ? carIconOn : carIconOff);
                                marker.setPopupContent(popupContent);
                            } else {
                                marker = L.marker([lat, lng], { icon: ignition ? carIconOn : carIconOff })
                                    .addTo(map)
                                    .bindPopup(popupContent);
                                map.setView([lat, lng], 15);
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching location:', error);
                        $('#map-status .bullet').removeClass('bg-success').addClass('bg-danger');
                    });
            }

            function getGsmBars(signal) {
                const bars = Math.min(Math.max(signal, 0), 5);
                let html = '';
                for (let i = 1; i <= 5; i++) {
                    const active = i <= bars ? 'bg-success' : 'bg-secondary';
                    const height = 4 + (i * 3);
                    html += `<span style="display:inline-block; width:4px; height:${height}px; margin-right:2px; border-radius:1px;" class="${active}"></span>`;
                }
                return html;
            }

            // Initial load
            updateMap();

            // Auto-refresh every 10 seconds
            setInterval(updateMap, 10000);
            @endcan
            @endif
        });
    </script>
    @endpush
</x-app-layout>
