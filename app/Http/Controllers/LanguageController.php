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
        session(['locale' => $locale]);

        // Set the application locale for this request
        App::setLocale($locale);

        // Redirect back with cookie attached (1 year expiry)
        return redirect()->back()->cookie('locale', $locale, 525600);
    }
}
