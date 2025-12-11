<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get the locale from session first
        $locale = Session::get('locale');

        // If not in session, try encrypted cookie
        if (!$locale) {
            try {
                $cookieValue = $request->cookie('locale');
                if ($cookieValue) {
                    $locale = Crypt::decrypt($cookieValue, false);
                }
            } catch (\Exception $e) {
                // Cookie decryption failed, ignore
            }
        }

        // Fallback to config
        if (!$locale) {
            $locale = config('app.locale');
        }

        // Verify the locale is supported
        if (! in_array($locale, ['en', 'ro'])) {
            $locale = config('app.locale');
        }

        // Set the application locale
        App::setLocale($locale);

        return $next($request);
    }
}
