<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Supported locales
     */
    private const SUPPORTED_LOCALES = ['en', 'id'];

    private const DEFAULT_LOCALE = 'en';

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get locale from route parameter (explicit)
        $locale = $request->route('locale');

        // Validate and set locale
        if ($locale && in_array($locale, self::SUPPORTED_LOCALES, true)) {
            App::setLocale($locale);
        } else {
            App::setLocale(self::DEFAULT_LOCALE);
        }

        return $next($request);
    }
}
