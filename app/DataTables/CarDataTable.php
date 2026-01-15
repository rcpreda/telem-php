<?php

namespace App\DataTables;

use App\Enums\CarStatus;
use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Yajra\DataTables\DataTables;

class CarDataTable
{
    public const TABLE_ID = 'cars-table';

    public function getDataTable(): JsonResponse
    {
        $query = Car::query();

        return DataTables::of($query)
            ->filter(function ($query) {
                if (request()->has('status') && request('status') != '') {
                    $query->where('status', request('status'));
                }

                if (request()->has('fuel_type') && request('fuel_type') != '') {
                    $query->where('fuel_type', request('fuel_type'));
                }
            }, true)
            ->filterColumn('car', function ($query, $keyword) {
                $query->where(function ($q) use ($keyword) {
                    $q->where('make', 'like', "%{$keyword}%")
                        ->orWhere('model', 'like', "%{$keyword}%")
                        ->orWhere('license_plate', 'like', "%{$keyword}%")
                        ->orWhere('device_imei', 'like', "%{$keyword}%");
                });
            })
            ->addColumn('car', function (Car $car) {
                $initial = strtoupper(substr($car->make, 0, 1));

                $avatarHtml = '<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                    <div class="symbol-label bg-light-info text-info fw-bold">' . $initial . '</div>
                </div>';

                $licensePlate = $car->license_plate
                    ? '<span class="badge badge-light-secondary">' . e($car->license_plate) . '</span>'
                    : '';

                return '<div class="d-flex align-items-center">' .
                    $avatarHtml .
                    '<div class="d-flex flex-column">' .
                        '<a href="' . route('cars.show', $car) . '" class="text-gray-800 text-hover-primary mb-1">' . e($car->make . ' ' . $car->model) . '</a>' .
                        '<span class="text-muted">' . ($car->year ?? '') . ' ' . $licensePlate . '</span>' .
                    '</div>' .
                '</div>';
            })
            ->addColumn('tracker', function (Car $car) {
                if ($car->device_imei) {
                    $imei = $car->device_imei;
                    // Mask IMEI for demo users
                    if (auth()->user()->hasRole('demo')) {
                        $imei = substr($imei, 0, 4) . '********' . substr($imei, -3);
                    }
                    return '<span class="badge badge-light-success">' . e($imei) . '</span>';
                }

                return '<span class="badge badge-light-secondary">' . __('car.no_tracker') . '</span>';
            })
            ->addColumn('status', function (Car $car) {
                $status = $car->status?->value ?? 'inactive';
                $color = match ($status) {
                    'active' => 'success',
                    'maintenance' => 'warning',
                    default => 'danger',
                };

                return '<span class="badge badge-light-' . $color . '">' . ucfirst($status) . '</span>';
            })
            ->orderColumn('status', function ($query, $order) {
                $query->orderBy('status', $order);
            })
            ->editColumn('created_at', function (Car $car) {
                return $car->created_at->format('d M Y');
            })
            ->addColumn('actions', function (Car $car) {
                $showUrl = route('cars.show', $car);
                $editUrl = route('cars.edit', $car);

                return '
                    <div class="d-flex justify-content-end gap-1">
                        <a href="' . $showUrl . '"
                           class="btn btn-icon btn-light btn-active-light-info btn-sm"
                           data-bs-toggle="tooltip"
                           title="' . __('car.view_details') . '">
                            <i class="ki-duotone ki-eye fs-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </a>
                        <a href="' . $editUrl . '"
                           class="btn btn-icon btn-light btn-active-light-primary btn-sm"
                           data-bs-toggle="tooltip"
                           title="' . __('car.edit') . '">
                            <i class="ki-duotone ki-notepad-edit fs-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                    </div>
                ';
            })
            ->rawColumns(['car', 'tracker', 'status', 'actions'])
            ->make(true);
    }
}
