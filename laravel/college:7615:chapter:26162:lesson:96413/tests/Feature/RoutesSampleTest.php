<?php

namespace Tests\Feature;

use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class RoutesSampleTest extends TestCase
{
    public function testRoutesWithClosures()
    {
        Route::get('/', function () {
            return "/";
        });
        $response = $this->get("/");
        $response->assertStatus(500, "مشکل در اجرا روت‌ها");
    }
}
