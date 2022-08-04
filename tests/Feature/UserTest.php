<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/test');

        $response->assertStatus(404);
        //test passes because the '/test' route is not available and the assertStatus checks if it's a 404
        //404 - object not found
    }
}
