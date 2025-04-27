<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteSampleTest extends TestCase
{
    public function test_passed_route()
    {
        $response = $this->withHeaders([
            'debug' => 'false',
        ])->get('/');

        $response->assertStatus(200, 'روت به درستی تنظیم نشده است');
    }
}
