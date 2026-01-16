<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ __('car.trip_report') }} - {{ $car->license_plate }}</title>
    <style>
        @page { margin: 10mm; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 9px;
            line-height: 1.2;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 8px;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        .header h1 { font-size: 16px; margin-bottom: 2px; text-transform: uppercase; }
        .header .subtitle { font-size: 9px; color: #666; }
        .header-row {
            width: 100%;
            margin-bottom: 8px;
        }
        .header-row td { vertical-align: top; }
        .header-row .left { text-align: left; width: 50%; }
        .header-row .right { text-align: right; width: 50%; font-size: 8px; color: #666; }
        .section { margin-bottom: 8px; }
        .section-title {
            font-size: 10px;
            font-weight: bold;
            background: #f0f0f0;
            padding: 4px 6px;
            margin-bottom: 4px;
            border-left: 3px solid #333;
        }
        .info-table { width: 100%; border-collapse: collapse; }
        .info-table td { padding: 3px 5px; border-bottom: 1px solid #eee; }
        .info-table td:first-child { width: 35%; font-weight: bold; color: #555; }
        .stats-row { width: 100%; margin-bottom: 8px; }
        .stats-row td {
            width: 20%;
            text-align: center;
            padding: 6px 4px;
            border: 1px solid #ddd;
            background: #fafafa;
        }
        .stats-row .stat-value { font-size: 12px; font-weight: bold; color: #333; }
        .stats-row .stat-label { font-size: 7px; color: #666; text-transform: uppercase; }
        .two-col { width: 100%; }
        .two-col td { width: 50%; vertical-align: top; padding-right: 8px; }
        .two-col td:last-child { padding-right: 0; padding-left: 8px; }
        .observations-box { border: 1px solid #ddd; min-height: 30px; padding: 5px; }
        .signature-table { width: 100%; margin-top: 10px; }
        .signature-table td { width: 50%; text-align: center; padding: 5px; }
        .signature-line { border-top: 1px solid #333; margin-top: 25px; padding-top: 3px; font-size: 8px; }
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 7px;
            color: #999;
            border-top: 1px solid #eee;
            padding-top: 3px;
        }
        .badge { display: inline-block; padding: 1px 4px; font-size: 7px; border-radius: 2px; background: #fff3cd; color: #856404; }
    </style>
</head>
<body>
    <div class="header">
        <h1>{{ __('car.trip_report_title') }}</h1>
        <div class="subtitle">{{ config('app.name') }}</div>
    </div>

    <table class="header-row">
        <tr>
            <td class="left"><strong>{{ $car->make }} {{ $car->model }}</strong> | {{ $car->license_plate ?? '-' }}</td>
            <td class="right">{{ __('car.report_number') }}: {{ $reportNumber }} | {{ $generatedAt->format('d.m.Y H:i') }}</td>
        </tr>
    </table>

    <!-- Stats Summary -->
    <table class="stats-row">
        <tr>
            <td>
                <div class="stat-value">{{ number_format($trip['distanceKm'], 1) }} km</div>
                <div class="stat-label">{{ __('car.distance') }}</div>
            </td>
            <td>
                <div class="stat-value">{{ $trip['duration'] ?? '-' }}</div>
                <div class="stat-label">{{ __('car.duration') }}</div>
            </td>
            <td>
                <div class="stat-value">{{ number_format($trip['avgSpeedMoving'] ?? 0, 0) }} km/h</div>
                <div class="stat-label">{{ __('car.avg_speed') }}</div>
            </td>
            <td>
                <div class="stat-value">{{ $trip['maxSpeed'] ?? 0 }} km/h</div>
                <div class="stat-label">{{ __('car.max_speed') }}</div>
            </td>
            @if($fuelUsed)
            <td>
                <div class="stat-value">{{ number_format($fuelUsed, 1) }} L</div>
                <div class="stat-label">{{ __('car.fuel_used') }}</div>
            </td>
            @endif
        </tr>
    </table>

    <!-- Two Column Layout -->
    <table class="two-col">
        <tr>
            <td>
                <!-- Vehicle Info -->
                <div class="section">
                    <div class="section-title">{{ __('car.vehicle_info') }}</div>
                    <table class="info-table">
                        <tr><td>{{ __('car.make') }}/{{ __('car.model') }}</td><td>{{ $car->make }} {{ $car->model }}</td></tr>
                        <tr><td>{{ __('car.license_plate') }}</td><td><strong>{{ $car->license_plate ?? '-' }}</strong></td></tr>
                        @if($car->year)<tr><td>{{ __('car.year') }}</td><td>{{ $car->year }}</td></tr>@endif
                        @if($car->vin)<tr><td>{{ __('car.vin') }}</td><td style="font-size:7px;">{{ $car->vin }}</td></tr>@endif
                    </table>
                </div>

                <!-- Route -->
                <div class="section">
                    <div class="section-title">{{ __('car.route') }}</div>
                    <table class="info-table">
                        <tr><td>{{ __('car.start_location') }}</td><td>{{ $trip['startAddress'] ?? __('car.address_not_available') }}</td></tr>
                        <tr><td>{{ __('car.end_location') }}</td><td>{{ $trip['endAddress'] ?? __('car.address_not_available') }}</td></tr>
                    </table>
                </div>
            </td>
            <td>
                <!-- Trip Details -->
                <div class="section">
                    <div class="section-title">{{ __('car.trip_details') }}</div>
                    <table class="info-table">
                        <tr><td>{{ __('car.date') }}</td><td>{{ date('d.m.Y', strtotime($trip['startTime'])) }}</td></tr>
                        <tr><td>{{ __('car.departure_time') }}</td><td>{{ date('H:i', strtotime($trip['startTime'])) }}</td></tr>
                        <tr><td>{{ __('car.arrival_time') }}</td><td>{{ date('H:i', strtotime($trip['endTime'])) }}</td></tr>
                        <tr><td>{{ __('car.duration') }}</td><td>{{ $trip['duration'] ?? '-' }}</td></tr>
                        <tr><td>{{ __('car.distance') }}</td><td>{{ number_format($trip['distanceKm'], 1) }} km</td></tr>
                    </table>
                </div>

                <!-- Fuel -->
                @if($fuelUsed)
                <div class="section">
                    <div class="section-title">{{ __('car.fuel_consumption') }} <span class="badge">{{ __('car.estimated') }}</span></div>
                    <table class="info-table">
                        <tr><td>{{ __('car.fuel_used') }}</td><td>{{ number_format($fuelUsed, 2) }} L</td></tr>
                        <tr><td>{{ __('car.consumption_per_100km') }}</td><td>{{ number_format($fuelPer100, 1) }} L/100km</td></tr>
                    </table>
                </div>
                @endif
            </td>
        </tr>
    </table>

    <!-- Observations -->
    <div class="section">
        <div class="section-title">{{ __('car.observations') }}</div>
        <div class="observations-box">&nbsp;</div>
    </div>

    <!-- Signatures -->
    <table class="signature-table">
        <tr>
            <td><div class="signature-line">{{ __('car.driver_signature') }}</div></td>
            <td><div class="signature-line">{{ __('car.dispatcher_signature') }}</div></td>
        </tr>
    </table>

    <div class="footer">{{ __('car.document_generated_by') }} {{ config('app.name') }} | {{ $generatedAt->format('d.m.Y H:i:s') }}</div>
</body>
</html>
