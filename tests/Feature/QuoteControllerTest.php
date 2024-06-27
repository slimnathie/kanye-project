<?php

namespace Tests\Feature;

use Tests\TestCase;

class QuoteControllerTest extends TestCase
{
    public function testFetchQuotes()
    {
        $response = $this->withHeaders([
            'api-token' => env('API_TOKEN'),
        ])->getJson('/api/quotes');

        $response->assertStatus(200); // Authorised Token
    }

    public function testFetchQuotesInvalidToken()
    {
        $response = $this->withHeaders([
            'api-token' => 'invalid-token',
        ])->getJson('/api/quotes');

        $response->assertStatus(401); // Invalid Token
    }

    public function testFetchQuotesUnauthorized()
    {
        $response = $this->getJson('/api/quotes');

        $response->assertStatus(401); // Unauthorised Without Token
    }
}
