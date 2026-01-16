<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Services\TelemApiService;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TripReportExport;

class TripReportController extends Controller
{
    public function __construct(
        protected TelemApiService $telemApi
    ) {}

    public function pdf(Request $request, Car $car, int $tripIndex)
    {
        $trip = $this->getTripData($car, $tripIndex);

        if (!$trip) {
            return back()->with('error', __('car.trip_not_found'));
        }

        $data = $this->prepareTripReportData($car, $trip);

        $pdf = Pdf::loadView('reports.trip-report', $data);
        $pdf->setPaper('A4', 'portrait');

        $filename = 'foaie-parcurs-' . $car->license_plate . '-' . date('Y-m-d', strtotime($trip['startTime'])) . '.pdf';

        return $pdf->download($filename);
    }

    public function excel(Request $request, Car $car, int $tripIndex)
    {
        $trip = $this->getTripData($car, $tripIndex);

        if (!$trip) {
            return back()->with('error', __('car.trip_not_found'));
        }

        $data = $this->prepareTripReportData($car, $trip);

        $filename = 'foaie-parcurs-' . $car->license_plate . '-' . date('Y-m-d', strtotime($trip['startTime'])) . '.xlsx';

        return Excel::download(new TripReportExport($data), $filename);
    }

    protected function getTripData(Car $car, int $tripIndex): ?array
    {
        if (!$car->device_imei) {
            return null;
        }

        $trips = $this->telemApi->getTrips($car->device_imei);

        if (!$trips || !isset($trips['trips'][$tripIndex])) {
            return null;
        }

        return $trips['trips'][$tripIndex];
    }

    protected function prepareTripReportData(Car $car, array $trip): array
    {
        // Calculate estimated fuel consumption
        $fuelUsed = null;
        $fuelPer100 = null;

        if ($car->fuel_consumption && ($trip['distanceKm'] ?? 0) > 0) {
            $baseConsumption = $car->fuel_consumption;
            $distance = $trip['distanceKm'];
            $avgSpeed = $trip['avgSpeedMoving'] ?? 40;

            // Speed factor for realistic variation
            $speedFactor = 1.0;
            if ($avgSpeed < 30) {
                $speedFactor = 1.20;
            } elseif ($avgSpeed < 50) {
                $speedFactor = 1.10;
            } elseif ($avgSpeed > 110) {
                $speedFactor = 1.15;
            }

            $seed = ($distance * 100 + $avgSpeed) % 20;
            $randomFactor = 0.95 + ($seed / 100);

            $fuelPer100 = $baseConsumption * $speedFactor * $randomFactor;
            $fuelUsed = ($fuelPer100 / 100) * $distance;
        }

        return [
            'car' => $car,
            'trip' => $trip,
            'fuelUsed' => $fuelUsed,
            'fuelPer100' => $fuelPer100,
            'generatedAt' => now(),
            'reportNumber' => 'FP-' . $car->id . '-' . date('Ymd-His'),
        ];
    }
}
