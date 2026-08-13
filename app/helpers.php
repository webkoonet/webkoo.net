<?php

/**
 * Global Helper Functions
 */
if (! function_exists('getLocalizedPath')) {
    /**
     * Translate a path to another locale.
     *
     * @param  string  $path  Current path (without locale prefix)
     * @param  string  $toLocale  Target locale ('en' or 'id')
     * @return string Translated path for the target locale
     */
    function getLocalizedPath(string $path, string $toLocale): string
    {
        if ($toLocale === 'en') {
            return $path; // English is default, no translation needed
        }

        $mappings = config('localized-routes.'.$toLocale, []);

        // Try exact match first
        if (isset($mappings[$path])) {
            return $mappings[$path];
        }

        // Try partial match (for paths with parameters like pricing/plan-1)
        foreach ($mappings as $enPath => $localizedPath) {
            if (str_starts_with($path, $enPath)) {
                return str_replace($enPath, $localizedPath, $path);
            }
        }

        // No mapping found, return as-is
        return $path;
    }
}

if (! function_exists('getEnglishPath')) {
    /**
     * Translate a localized path back to English.
     *
     * @param  string  $path  Current path (without locale prefix)
     * @param  string  $currentLocale  Current locale
     * @return string English path
     */
    function getEnglishPath(string $path, string $currentLocale): string
    {
        if ($currentLocale === 'en') {
            return $path; // Already English
        }

        $mappings = config('localized-routes.'.$currentLocale, []);

        // Try exact match first
        $englishPath = array_search($path, $mappings, true);
        if ($englishPath !== false) {
            return $englishPath;
        }

        // Try partial match (reverse mapping)
        foreach ($mappings as $enPath => $localizedPath) {
            if (str_starts_with($path, $localizedPath)) {
                return str_replace($localizedPath, $enPath, $path);
            }
        }

        // No mapping found, return as-is
        return $path;
    }
}

if (! function_exists('getPathWithoutLocale')) {
    /**
     * Remove locale prefix from a path.
     *
     * @param  string  $path  Full path with locale prefix
     * @return string Path without locale prefix
     */
    function getPathWithoutLocale(string $path): string
    {
        if (str_starts_with($path, 'id/')) {
            return substr($path, 3);
        }
        if (str_starts_with($path, 'en/')) {
            return substr($path, 3);
        }
        if ($path === 'id' || $path === 'en') {
            return '';
        }

        return $path;
    }
}

if (! function_exists('getLocalizedUrl')) {
    /**
     * Get full localized URL with locale prefix.
     *
     * @param  string  $path  Path without locale prefix
     * @param  string  $toLocale  Target locale
     * @param  string|null  $queryParams  Query string (include the ?)
     * @return string Full localized URL
     */
    function getLocalizedUrl(string $path, string $toLocale, ?string $queryParams = null): string
    {
        $localizedPath = getLocalizedPath($path, $toLocale);

        if ($toLocale === 'en') {
            return '/'.ltrim($localizedPath, '/').($queryParams ?? '');
        }

        return '/'.$toLocale.($localizedPath ? '/'.ltrim($localizedPath, '/') : '').($queryParams ?? '');
    }
}
