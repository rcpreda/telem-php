<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TelemApiService
{
    protected string $baseUrl;
    protected string $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.telem_api.url', 'http://localhost:3000');
        $this->apiKey = config('services.telem_api.key', '');
    }

    protected function http()
    {
        return Http::timeout(10)->withHeaders([
            'X-API-Key' => $this->apiKey,
        ]);
    }

    public function getTrips(string $imei): ?array
    {
        try {
            $response = $this->http()->get("{$this->baseUrl}/devices/{$imei}/trips");

            if ($response->successful()) {
                return $response->json();
            }

            Log::warning("TelemAPI: Failed to fetch trips for {$imei}", [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error("TelemAPI: Exception fetching trips for {$imei}", [
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }

    public function getDailyRange(string $imei, string $from, string $to): ?array
    {
        try {
            $response = $this->http()->get("{$this->baseUrl}/devices/{$imei}/daily-range", [
                'from' => $from,
                'to' => $to,
            ]);

            if ($response->successful()) {
                return $response->json();
            }

            Log::warning("TelemAPI: Failed to fetch daily range for {$imei}", [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error("TelemAPI: Exception fetching daily range for {$imei}", [
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }

    public function getLatest(string $imei): ?array
    {
        try {
            $response = $this->http()->get("{$this->baseUrl}/devices/{$imei}/latest");

            if ($response->successful()) {
                return $response->json();
            }

            Log::warning("TelemAPI: Failed to fetch latest for {$imei}", [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error("TelemAPI: Exception fetching latest for {$imei}", [
                'error' => $e->getMessage(),
            ]);

            return null;
        }
    }
}
