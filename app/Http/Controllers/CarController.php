<?php

namespace App\Http\Controllers;

use App\DataTables\CarDataTable;
use App\Enums\CarStatus;
use App\Enums\FuelType;
use App\Models\Car;
use App\Services\TelemApiService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CarController extends Controller
{
    public function __construct(
        protected TelemApiService $telemApi
    ) {}

    public function index(): View
    {
        return view('cars.index', [
            'statuses' => CarStatus::options(),
            'fuelTypes' => FuelType::options(),
        ]);
    }

    public function data(Request $request, CarDataTable $dataTable): JsonResponse
    {
        return $dataTable->getDataTable();
    }

    public function create(): View
    {
        return view('cars.create', [
            'statuses' => CarStatus::values(),
            'fuelTypes' => FuelType::options(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'device_imei' => 'nullable|string|max:255|unique:cars,device_imei',
            'license_plate' => 'nullable|string|max:255',
            'vin' => 'nullable|string|max:255|unique:cars,vin',
            'year' => 'nullable|integer|min:1900|max:' . (date('Y') + 1),
            'color' => 'nullable|string|max:255',
            'mileage' => 'nullable|integer|min:0',
            'fuel_type' => 'nullable|in:' . FuelType::validationRule(),
            'fuel_consumption' => 'nullable|numeric|min:0|max:99.9',
            'status' => 'required|in:' . CarStatus::validationRule(),
            'notes' => 'nullable|string|max:1000',
        ]);

        try {
            Car::create($validated);

            return redirect()->route('cars.index')->with('success', __('car.created_successfully'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('car.creation_failed') . ': ' . $e->getMessage())
                ->withInput();
        }
    }

    public function edit(Car $car): View
    {
        return view('cars.edit', [
            'car' => $car,
            'statuses' => CarStatus::values(),
            'fuelTypes' => FuelType::options(),
        ]);
    }

    public function update(Request $request, Car $car): RedirectResponse
    {
        $validated = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'device_imei' => 'nullable|string|max:255|unique:cars,device_imei,' . $car->id,
            'license_plate' => 'nullable|string|max:255',
            'vin' => 'nullable|string|max:255|unique:cars,vin,' . $car->id,
            'year' => 'nullable|integer|min:1900|max:' . (date('Y') + 1),
            'color' => 'nullable|string|max:255',
            'mileage' => 'nullable|integer|min:0',
            'fuel_type' => 'nullable|in:' . FuelType::validationRule(),
            'fuel_consumption' => 'nullable|numeric|min:0|max:99.9',
            'status' => 'required|in:' . CarStatus::validationRule(),
            'notes' => 'nullable|string|max:1000',
        ]);

        try {
            $car->update($validated);

            return redirect()->route('cars.index')->with('success', __('car.updated_successfully'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('car.update_failed') . ': ' . $e->getMessage())
                ->withInput();
        }
    }

    public function destroy(Car $car): RedirectResponse
    {
        try {
            $car->delete();

            return redirect()->route('cars.index')->with('success', __('car.deleted_successfully'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', __('car.deletion_failed') . ': ' . $e->getMessage());
        }
    }

    public function show(Car $car): View
    {
        $trips = null;
        $dailyStats = null;

        if ($car->device_imei) {
            $trips = $this->telemApi->getTrips($car->device_imei);

            $from = now()->subDays(30)->format('Y-m-d');
            $to = now()->format('Y-m-d');
            $dailyStats = $this->telemApi->getDailyRange($car->device_imei, $from, $to);
        }

        return view('cars.show', [
            'car' => $car,
            'trips' => $trips,
            'dailyStats' => $dailyStats,
        ]);
    }

    public function trips(Car $car): JsonResponse
    {
        if (!$car->device_imei) {
            return response()->json(['error' => 'No tracker device assigned'], 400);
        }

        $trips = $this->telemApi->getTrips($car->device_imei);

        return response()->json($trips);
    }

    public function dailyStats(Request $request, Car $car): JsonResponse
    {
        if (!$car->device_imei) {
            return response()->json(['error' => 'No tracker device assigned'], 400);
        }

        $from = $request->get('from', now()->subDays(30)->format('Y-m-d'));
        $to = $request->get('to', now()->format('Y-m-d'));

        $dailyStats = $this->telemApi->getDailyRange($car->device_imei, $from, $to);

        return response()->json($dailyStats);
    }

    public function latest(Car $car): JsonResponse
    {
        if (!$car->device_imei) {
            return response()->json(['error' => 'No tracker device assigned'], 400);
        }

        $latest = $this->telemApi->getLatest($car->device_imei);

        return response()->json($latest);
    }
}
