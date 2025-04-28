<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class KeyboardSampleTest extends TestCase
{
    public function test_laravel()
    {
        $response = $this->get('/?text=ghvh,g');

        $response->assertSeeText('لاراول', 'خروجی اشتباه است');
    }
}
