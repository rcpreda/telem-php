<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public ?string $site_logo = null;

    public ?string $site_logo_dark = null;

    public ?string $site_logo_small = null;

    public ?string $site_logo_small_dark = null;

    public static function group(): string
    {
        return 'general';
    }

    public function getSiteLogoUrl(): string
    {
        return $this->site_logo
            ? asset('storage/'.$this->site_logo)
            : asset('storage/logos/default.png');
    }

    public function getSiteLogoDarkUrl(): string
    {
        return $this->site_logo_dark
            ? asset('storage/'.$this->site_logo_dark)
            : asset('storage/logos/default-dark.png');
    }

    public function getSiteLogoSmallUrl(): string
    {
        return $this->site_logo_small
            ? asset('storage/'.$this->site_logo_small)
            : asset('storage/logos/default-small.png');
    }

    public function getSiteLogoSmallDarkUrl(): string
    {
        return $this->site_logo_small_dark
            ? asset('storage/'.$this->site_logo_small_dark)
            : asset('storage/logos/default-small-dark.png');
    }
}
