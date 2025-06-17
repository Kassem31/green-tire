<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Helpers\LocalizationHelper;

class LanguageController extends Controller
{
    /**
     * Switch the application language
     *
     * @param Request $request
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switch(Request $request, $locale)
    {
        // Validate the locale
        if (!LocalizationHelper::isLanguageSupported($locale)) {
            return redirect()->back()->with('error', __('messages.invalid_language'));
        }

        // Set the locale
        LocalizationHelper::setLocale($locale);

        // Redirect back with success message
        return redirect()->back()->with('success', __('messages.language_changed_successfully'));
    }

    /**
     * Get available languages as JSON (for AJAX requests)
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLanguages()
    {
        return response()->json([
            'languages' => LocalizationHelper::getLanguages(),
            'current' => LocalizationHelper::getCurrentLocale()
        ]);
    }
}