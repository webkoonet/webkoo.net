<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display the pricing page.
     */
    public function index(Request $request)
    {
        // Get locale from middleware (already set by SetLocale middleware)
        $locale = app()->getLocale();

        $pricingData = [
            'plans' => [
                ['name' => 'Basic', 'price' => 'Free', 'description' => 'For starters'],
                ['name' => 'Pro', 'price' => '$49', 'description' => 'For professionals'],
            ],
        ];

        return view('pricing.index', compact('locale', 'pricingData'));
    }

    /**
     * Display specific pricing plan details.
     */
    public function show(Request $request, string $slug)
    {
        // Get locale from middleware (already set by SetLocale middleware)
        $locale = app()->getLocale();

        return "Plan details: {$slug} (locale: {$locale})";
    }
}
