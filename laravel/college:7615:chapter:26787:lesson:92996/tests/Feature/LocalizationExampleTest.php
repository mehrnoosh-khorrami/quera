<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LocalizationExampleTest extends TestCase
{
    public function test_config()
    {
        $config = config('app.locale');

        $this->assertEquals($config, "fa", "کانفیگ به‌درستی تنظیم نشده است");

        $config = config('app.fallback_locale');

        $this->assertEquals($config, "fa", "کانفیگ به‌درستی تنظیم نشده است");
    }
}
