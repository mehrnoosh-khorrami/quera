<?php

namespace Tests\Feature;

use App\Traits\ScraperTrait;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class ScraperSampleTest extends TestCase
{
    use ScraperTrait;

    public function test_get_title()
    {
        $page = file_get_contents(__DIR__.'/sample_index.html');

        $this->assertEquals(
            'بلاگ کوئرا - همه چیز درباره دنیای برنامه نویسی',
            $this->getPageTitle($page)
        );
    }
}
