<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact.email', 'info@example.com');
        $this->migrator->add('contact.phone', '+1 (555) 123-4567');
        $this->migrator->add('contact.address_line1', '123 Business St, Suite 100');
        $this->migrator->add('contact.address_line2', null);
        $this->migrator->add('contact.city', 'City');
        $this->migrator->add('contact.state', 'State');
        $this->migrator->add('contact.zip', '12345');
        $this->migrator->add('contact.country', null);
        $this->migrator->add('contact.business_hours', 'Monday - Friday: 9:00 AM - 6:00 PM');
        $this->migrator->add('contact.facebook_url', null);
        $this->migrator->add('contact.twitter_url', null);
        $this->migrator->add('contact.linkedin_url', null);
        $this->migrator->add('contact.instagram_url', null);
    }
};
