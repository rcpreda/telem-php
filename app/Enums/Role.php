<?php

namespace App\Enums;

enum Role: string
{
    case SUPER_ADMIN = 'super-admin';
    case AGENT = 'agent';
    case DEMO = 'demo';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function options(): array
    {
        return collect(self::cases())->mapWithKeys(fn ($case) => [
            $case->value => $case->label(),
        ])->toArray();
    }

    public function label(): string
    {
        return match ($this) {
            self::SUPER_ADMIN => __('Super Admin'),
            self::AGENT => __('Agent'),
            self::DEMO => __('Demo'),
        };
    }

    public static function validationRule(): string
    {
        return implode(',', self::values());
    }
}
