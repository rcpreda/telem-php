<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsSuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If user is super-admin, allow access to everything
        if ($request->user() && $request->user()->hasRole('super-admin')) {
            return $next($request);
        }

        // If not super-admin, return 403 Forbidden
        abort(403, 'Access denied. Super Admin privileges required.');
    }
}
