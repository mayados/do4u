<?php

class Translate
{
    protected static array $translates = [];

    public static function translate(
        string $key, // Translate key
        array $data = [], // Example: $data = ['price' => '75.99€']
        string $locale = '', // Force locale, example: 'fr', 'en', ...
    ): string {
        // Default default local app
        if (empty($locale)) {
            $locale = App::getLocale();
        }

        // Load translate file
        self::loadTranslateFile($locale);

        // Get translation (or $key by default)
        $trans = (string) ((self::$translates[$locale][$key] ?? null) ?: $key);

        // Replace data key=>value in translate
        foreach ($data as $key => $value) {
            $trans = str_replace('{:'.$key.'}', $value, $trans);
        }

        return $trans;
    }

    protected static function loadTranslateFile(string $locale): void
    {
        if (empty(self::$translates[$locale])) {
            self::$translates[$locale] =
                require_once base_path('translate/'.$locale.'.php');
        }
    }
}