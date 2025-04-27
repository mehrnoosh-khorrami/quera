<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class RulesSampleTest extends TestCase
{
    public function testRules1()
    {
        $response = $this->post('/', [
            'captcha' => 16
        ]);

        $response->assertStatus(200, "اشکال در اعتبار‌سنجی وجود دارد");

        $response = $this->post('/', [
            'mobile' => Str::random(10),
            'message' => Str::random(110),
            'captcha' => 10
        ]);

        $response->assertStatus(302, "اشکال در اعتبار‌سنجی وجود دارد");
    }
}
