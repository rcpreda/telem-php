<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Switch the application language
     */
    public function switch(string $locale): RedirectResponse
    {
        // Verify the locale is supported
        if (! in_array($locale, ['en', 'ro'])) {
            abort(400, 'Invalid language');
        }

        // Store the selected language in session
        Session::put('locale', $locale);

        // Set the application locale
        App::setLocale($locale);

        // Redirect back to the previous page
        return redirect()->back();
    }
}
