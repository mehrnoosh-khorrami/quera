<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class HelperExampleTest extends TestCase
{
    public function test_default_laravel_values()
    {
        Config::set('app.name', 'Quera');
        Config::set('app.url', 'quera.ir');
        $this->assertEquals(get_info(), 'Quera - quera.ir', 'هلپر به درستی تنظیم نشده است');
    }
}
