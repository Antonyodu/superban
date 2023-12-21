<?php

namespace Tests\Feature;

use Tests\TestCase;

class SuperBanTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSuperBanMiddlewareForThisRoute()
    {
        $response = $this->withMiddleware(['SuperBan:200,2,1440'])->post('/thisroute');

        $response->assertStatus(200)
            ->assertExactJson(['success' => true]); // Adjust the expected response as needed
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSuperBanMiddlewareForAnotherRoute()
    {
        $response = $this->withMiddleware(['SuperBan:200,2,1440'])->post('/anotherroute');

        $response->assertStatus(200)
            ->assertExactJson(['success' => true]); // Adjust the expected response as needed
    }
}
