<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PricingController extends Controller
{
    /**
     * Display the pricing page.
     */
    public function index(Request $request)
    {
        // Get locale from route parameter
        $locale = $request->route('locale') ?? 'en';

        // Validate and set locale
        if (in_array($locale, ['en', 'id'])) {
            App::setLocale($locale);
        }

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
        $locale = $request->route('locale') ?? 'en';

        if (in_array($locale, ['en', 'id'])) {
            App::setLocale($locale);
        }

        return "Plan details: {$slug} (locale: {$locale})";
    }
}
