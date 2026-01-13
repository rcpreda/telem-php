<?php

namespace App\Enums;

enum FuelType: string
{
    case PETROL = 'petrol';
    case DIESEL = 'diesel';
    case ELECTRIC = 'electric';
    case HYBRID = 'hybrid';
    case LPG = 'lpg';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function options(): array
    {
        return [
            self::PETROL->value => self::PETROL->label(),
            self::DIESEL->value => self::DIESEL->label(),
            self::ELECTRIC->value => self::ELECTRIC->label(),
            self::HYBRID->value => self::HYBRID->label(),
            self::LPG->value => self::LPG->label(),
        ];
    }

    public function label(): string
    {
        return match ($this) {
            self::PETROL => __('car.petrol'),
            self::DIESEL => __('car.diesel'),
            self::ELECTRIC => __('car.electric'),
            self::HYBRID => __('car.hybrid'),
            self::LPG => __('car.lpg'),
        };
    }

    public static function validationRule(): string
    {
        return implode(',', self::values());
    }
}
