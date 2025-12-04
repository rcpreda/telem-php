<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ContactSettings extends Settings
{
    public ?string $email = null;

    public ?string $phone = null;

    public ?string $address_line1 = null;

    public ?string $address_line2 = null;

    public ?string $city = null;

    public ?string $state = null;

    public ?string $zip = null;

    public ?string $country = null;

    public ?string $business_hours = null;

    public ?string $facebook_url = null;

    public ?string $twitter_url = null;

    public ?string $linkedin_url = null;

    public ?string $instagram_url = null;

    public static function group(): string
    {
        return 'contact';
    }

    public function getFullAddress(): string
    {
        $parts = array_filter([
            $this->address_line1,
            $this->address_line2,
            $this->city,
            $this->state,
            $this->zip,
            $this->country,
        ]);

        return implode(', ', $parts);
    }
}
