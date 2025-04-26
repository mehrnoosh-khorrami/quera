<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Route;

class RouteSampleTest extends TestCase
{
    public function testAuthorized()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testFirstUnauthorized()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        
        $response = $this->withHeaders([
            'status' => 'banned',
        ])->get('/');

        $response->assertStatus(401);
    }
}
