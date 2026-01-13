<?php

namespace App\Enums;

enum CarStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case MAINTENANCE = 'maintenance';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function options(): array
    {
        return [
            self::ACTIVE->value => self::ACTIVE->label(),
            self::INACTIVE->value => self::INACTIVE->label(),
            self::MAINTENANCE->value => self::MAINTENANCE->label(),
        ];
    }

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => __('car.active'),
            self::INACTIVE => __('car.inactive'),
            self::MAINTENANCE => __('car.maintenance'),
        };
    }

    public static function validationRule(): string
    {
        return implode(',', self::values());
    }
}
