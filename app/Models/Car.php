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
        'status',
        'notes',
    ];

    protected $casts = [
        'year' => 'integer',
        'mileage' => 'integer',
        'status' => CarStatus::class,
    ];

    public function getFullNameAttribute(): string
    {
        return "{$this->make} {$this->model}";
    }
}
