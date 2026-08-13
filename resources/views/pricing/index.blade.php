@extends('layouts.app')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-3xl font-bold mb-4">Pricing Page</h1>
    <p class="text-gray-600">Current Locale: {{ $locale }}</p>

    <div class="mt-8 space-y-4">
        @foreach($pricingData['plans'] as $plan)
            <div class="border p-4 rounded">
                <h2 class="text-xl font-semibold">{{ $plan['name'] }}</h2>
                <p class="text-lg">{{ $plan['price'] }}</p>
                <p class="text-sm text-gray-500">{{ $plan['description'] }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-8">
        <a href="{{ getLocalizedUrl('pricing', $locale) }}" class="text-blue-600">Back to Pricing</a>
    </div>
</div>
@endsection
