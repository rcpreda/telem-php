<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TripReportExport implements FromArray, WithHeadings, WithTitle, WithStyles, WithColumnWidths
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function array(): array
    {
        $car = $this->data['car'];
        $trip = $this->data['trip'];

        return [
            [__('car.report_number'), $this->data['reportNumber']],
            [__('car.generated_at'), $this->data['generatedAt']->format('d.m.Y H:i')],
            ['', ''],
            [__('car.vehicle_info'), ''],
            [__('car.make') . ' / ' . __('car.model'), $car->make . ' ' . $car->model],
            [__('car.license_plate'), $car->license_plate ?? '-'],
            [__('car.year'), $car->year ?? '-'],
            ['', ''],
            [__('car.trip_details'), ''],
            [__('car.date'), date('d.m.Y', strtotime($trip['startTime']))],
            [__('car.departure_time'), date('H:i', strtotime($trip['startTime']))],
            [__('car.arrival_time'), date('H:i', strtotime($trip['endTime']))],
            [__('car.duration'), $trip['duration'] ?? '-'],
            [__('car.distance'), number_format($trip['distanceKm'], 1) . ' km'],
            [__('car.avg_speed'), number_format($trip['avgSpeedMoving'] ?? 0, 1) . ' km/h'],
            [__('car.max_speed'), ($trip['maxSpeed'] ?? 0) . ' km/h'],
            ['', ''],
            [__('car.fuel_consumption'), ''],
            [__('car.fuel_used'), $this->data['fuelUsed'] ? number_format($this->data['fuelUsed'], 2) . ' L' : '-'],
            [__('car.consumption_per_100km'), $this->data['fuelPer100'] ? number_format($this->data['fuelPer100'], 1) . ' L/100km' : '-'],
            ['', ''],
            [__('car.route'), ''],
            [__('car.start_location'), $trip['startAddress'] ?? __('car.address_not_available')],
            [__('car.end_location'), $trip['endAddress'] ?? __('car.address_not_available')],
            ['', ''],
            ['', ''],
            [__('car.driver_signature'), '____________________'],
            [__('car.dispatcher_signature'), '____________________'],
        ];
    }

    public function headings(): array
    {
        return [
            __('car.trip_report_title'),
            ''
        ];
    }

    public function title(): string
    {
        return __('car.trip_report');
    }

    public function styles(Worksheet $sheet): array
    {
        return [
            1 => ['font' => ['bold' => true, 'size' => 16]],
            4 => ['font' => ['bold' => true]],
            9 => ['font' => ['bold' => true]],
            17 => ['font' => ['bold' => true]],
            21 => ['font' => ['bold' => true]],
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 25,
            'B' => 40,
        ];
    }
}
