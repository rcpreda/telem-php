<?php

namespace App\Models;

use App\Enums\CarStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'model',
        'device_imei',
        'license_plate',
        'vin',
        'year',
        'color',
        'mileage',
        'fuel_type',
        'fuel_consumption',
        'status',
        'notes',
    ];

    protected $casts = [
        'year' => 'integer',
        'mileage' => 'integer',
        'fuel_consumption' => 'decimal:1',
        'status' => CarStatus::class,
    ];

    public function getFullNameAttribute(): string
    {
        return "{$this->make} {$this->model}";
    }
}
