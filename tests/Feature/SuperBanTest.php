<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RateLimitTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRateLimit()
    {
        // Replace the following with your actual route URL
        $routeUrl = 'thisroute';

        // Replace the following with your actual request payload
        $requestData = [];

        // Replace the following with the rate limit and interval
        $limit = 10;

        // Send POST requests to trigger rate limit
        for ($i = 0; $i < $limit + 2; $i++) {
            $response = $this->json('POST', $routeUrl, $requestData);

            if ($i < $limit) {
                // Expecting a successful response for the first $limit requests
                $response->assertStatus(200);
            } else {
                // Expecting a 429 response after hitting the rate limit
                $response->assertStatus(429);
            }

           
        }
    }
}
