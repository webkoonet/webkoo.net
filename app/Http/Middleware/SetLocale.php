<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        // Check if the first segment is a valid locale
        if (in_array($locale, ['id'])) {
            App::setLocale($locale);
            URL::defaults(['locale' => $locale]);
        } else {
            // Default to English
            App::setLocale('en');
            URL::defaults(['locale' => null]);
        }

        return $next($request);
    }
}
