<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RuleExampleTest extends TestCase
{
    public function test_prime()
    {
        $response = $this->post('/form', [
            'number' => 23
        ]);

        $response->assertStatus(200);
        
        $response = $this->post('/form', [
            'number' => 17
        ]);

        $response->assertStatus(302);
    }
}
