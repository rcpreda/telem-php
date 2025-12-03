<?php

namespace App\Enums;

enum UserStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function options(): array
    {
        return [
            self::ACTIVE->value => self::ACTIVE->label(),
            self::INACTIVE->value => self::INACTIVE->label(),
        ];
    }

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => __('user.active'),
            self::INACTIVE => __('user.inactive'),
        };
    }

    public static function validationRule(): string
    {
        return implode(',', self::values());
    }
}
