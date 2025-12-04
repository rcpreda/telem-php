<?php

namespace App\Http\Controllers;

use App\Settings\ContactSettings;
use App\Settings\GeneralSettings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function general(GeneralSettings $settings): View
    {
        return view('settings.general', [
            'settings' => $settings,
        ]);
    }

    public function updateGeneral(Request $request, GeneralSettings $settings): RedirectResponse
    {
        $request->validate([
            'site_logo' => ['nullable', 'file', 'mimes:png,jpg,jpeg,svg', 'max:2048'],
            'site_logo_dark' => ['nullable', 'file', 'mimes:png,jpg,jpeg,svg', 'max:2048'],
            'site_logo_small' => ['nullable', 'file', 'mimes:png,jpg,jpeg,svg', 'max:2048'],
            'site_logo_small_dark' => ['nullable', 'file', 'mimes:png,jpg,jpeg,svg', 'max:2048'],
            'site_logo_remove' => ['nullable', 'string'],
            'site_logo_dark_remove' => ['nullable', 'string'],
            'site_logo_small_remove' => ['nullable', 'string'],
            'site_logo_small_dark_remove' => ['nullable', 'string'],
        ]);

        $this->handleLogoUpload($request, $settings, 'site_logo');
        $this->handleLogoUpload($request, $settings, 'site_logo_dark');
        $this->handleLogoUpload($request, $settings, 'site_logo_small');
        $this->handleLogoUpload($request, $settings, 'site_logo_small_dark');

        $settings->save();

        return redirect()->route('settings.general')
            ->with('status', 'settings-updated');
    }

    private function handleLogoUpload(Request $request, GeneralSettings $settings, string $field): void
    {
        $removeField = $field.'_remove';

        if ($request->boolean($removeField) && $settings->{$field}) {
            Storage::disk('public')->delete($settings->{$field});
            $settings->{$field} = null;
        }

        if ($request->hasFile($field)) {
            $file = $request->file($field);

            if ($file->isValid()) {
                if ($settings->{$field}) {
                    Storage::disk('public')->delete($settings->{$field});
                }

                $path = $file->store('logos', 'public');
                $settings->{$field} = $path;
            }
        }
    }

    public function contact(ContactSettings $settings): View
    {
        return view('settings.contact', [
            'settings' => $settings,
        ]);
    }

    public function updateContact(Request $request, ContactSettings $settings): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'address_line1' => ['nullable', 'string', 'max:255'],
            'address_line2' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:100'],
            'state' => ['nullable', 'string', 'max:100'],
            'zip' => ['nullable', 'string', 'max:20'],
            'country' => ['nullable', 'string', 'max:100'],
            'business_hours' => ['nullable', 'string', 'max:255'],
            'facebook_url' => ['nullable', 'url', 'max:255'],
            'twitter_url' => ['nullable', 'url', 'max:255'],
            'linkedin_url' => ['nullable', 'url', 'max:255'],
            'instagram_url' => ['nullable', 'url', 'max:255'],
        ]);

        foreach ($validated as $key => $value) {
            $settings->{$key} = $value;
        }

        $settings->save();

        return redirect()->route('settings.contact')
            ->with('status', 'contact-settings-updated');
    }
}
