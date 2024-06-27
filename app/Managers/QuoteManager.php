<?php

namespace App\Managers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class QuoteManager
{
    public function getQuotes($count = 5)
    {
        try {
            return Cache::remember('kanye_quotes', now()->addMinutes(60), function () use ($count) {
                $quotes = [];

                for ($i = 0; $i < $count; $i++) {
                    $response = Http::get('https://api.kanye.rest/');
                    if ($response->successful()) {
                        $quotes[] = $response->json()['quote'];
                    } else {
                        Log::error('Failed to fetch quote', ['status' => $response->status()]);
                    }
                }

                return $quotes;
            });
        } catch (\Exception $e) {
            Log::error('Exception fetching quotes', ['exception' => $e]);
            return []; // Return empty array on exception
        }
    }
}
