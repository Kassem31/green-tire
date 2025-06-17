<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Helpers\LocalizationHelper;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if locale is set in session
        $locale = Session::get('locale');
        
        // If no locale in session, check if it's passed as parameter
        if (!$locale && $request->has('locale')) {
            $locale = $request->get('locale');
        }
        
        // If no locale found, use default
        if (!$locale) {
            $locale = config('app.locale', 'en');
        }
        
        // Validate and set locale
        if (LocalizationHelper::isLanguageSupported($locale)) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        }

        return $next($request);
    }
}