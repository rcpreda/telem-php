<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * Add security headers to protect against common vulnerabilities:
     * - XSS attacks
     * - Clickjacking
     * - MIME type sniffing
     * - Information disclosure
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Prevent MIME type sniffing
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // Clickjacking protection - allow same origin iframes
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        // XSS Protection (legacy browsers)
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        // Control referrer information
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        // Disable unnecessary browser features
        $response->headers->set('Permissions-Policy', 'geolocation=(), microphone=(), camera=()');

        // Content Security Policy
        // Allow self-hosted resources, Google Analytics, Google Fonts, and inline styles for Tailwind
        // Note: 'unsafe-eval' is required for Alpine.js to work properly
        $cspDirectives = [
            "default-src 'self'",
            "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.googletagmanager.com https://www.google-analytics.com",
            "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com",
            "font-src 'self' https://fonts.gstatic.com data:",
            "img-src 'self' data: https:",
            "connect-src 'self' https://www.google-analytics.com https://*.google-analytics.com",
            "frame-ancestors 'self'",
            "base-uri 'self'",
            "form-action 'self'",
        ];

        // In development, allow Vite dev server
        if (config('app.env') !== 'production') {
            $viteUrl = $request->getScheme() . '://' . $request->getHost() . ':5173';
            $host = $request->getHost();
            $cspDirectives = array_map(function($directive) use ($viteUrl, $host) {
                if (str_starts_with($directive, 'script-src')) {
                    return $directive . ' ' . $viteUrl;
                }
                if (str_starts_with($directive, 'style-src')) {
                    return $directive . ' ' . $viteUrl;
                }
                if (str_starts_with($directive, 'connect-src')) {
                    return $directive . ' ' . $viteUrl . ' ws://' . $host . ':5173 wss://' . $host . ':5173';
                }
                return $directive;
            }, $cspDirectives);
        }

        $csp = implode('; ', $cspDirectives);
        $response->headers->set('Content-Security-Policy', $csp);

        // HSTS - Force HTTPS (only in production with HTTPS)
        if (config('app.env') === 'production' && $request->secure()) {
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        }

        return $response;
    }
}
