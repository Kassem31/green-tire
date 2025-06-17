<?php

namespace App\Helpers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationHelper
{
    /**
     * Available languages
     */
    public static $languages = [
        'en' => 'English',
        'ar' => 'العربية'
    ];

    /**
     * Get the current application locale
     */
    public static function getCurrentLocale()
    {
        return App::getLocale();
    }

    /**
     * Get all available languages
     */
    public static function getLanguages()
    {
        return self::$languages;
    }

    /**
     * Check if the given language is supported
     */
    public static function isLanguageSupported($language)
    {
        return array_key_exists($language, self::$languages);
    }

    /**
     * Set the application locale
     */
    public static function setLocale($locale)
    {
        if (self::isLanguageSupported($locale)) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        }
    }

    /**
     * Get the locale from session or default
     */
    public static function getLocaleFromSession()
    {
        return Session::get('locale', config('app.locale'));
    }

    /**
     * Check if current locale is Arabic
     */
    public static function isArabic()
    {
        return self::getCurrentLocale() === 'ar';
    }

    /**
     * Check if current locale is English
     */
    public static function isEnglish()
    {
        return self::getCurrentLocale() === 'en';
    }

    /**
     * Get language direction (for future RTL support)
     */
    public static function getDirection()
    {
        return self::isArabic() ? 'rtl' : 'ltr';
    }

    /**
     * Get the language name for the current locale
     */
    public static function getCurrentLanguageName()
    {
        $locale = self::getCurrentLocale();
        return self::$languages[$locale] ?? 'Unknown';
    }
}