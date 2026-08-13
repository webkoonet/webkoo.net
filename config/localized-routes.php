<?php

/**
 * Localized Routes Configuration
 *
 * Define path translations for each locale.
 * English is the default locale (no prefix).
 *
 * Example: When user is on '/id/harga' and switches to English,
 * the path is translated to '/pricing'.
 */

return [
    // Locale => [English path => Localized path]
    'id' => [
        '' => '',                    // Home
        'pricing' => 'harga',        // Pricing page
        'pricing/' => 'harga/',      // Pricing with trailing slash
    ],
];
