<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait Translatable
{
    /**
     * Get translated attribute.
     *
     * @param string $attribute
     * @param string|null $locale
     * @return string
     */
    public function getTranslated(string $attribute, ?string $locale = null): string
    {
        return $this->getTranslation($attribute, $locale);
    }

    public function getTranslation(string $attribute, ?string $locale = null): string
    {
        $locale = $locale ?? App::getLocale();
        $translations = $this->{$attribute} ?? [];

        if (is_string($translations)) {
            $translations = json_decode($translations, true) ?? [];
        }

        return $translations[$locale] ?? $translations[config('app.fallback_locale')] ?? '';
    }
}
