<?php

namespace Tests\Feature;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Tests\TestCase;
use Illuminate\Http\Request;

class ControllerSampleTest extends TestCase
{
    private ?Request $request;
    private bool $initialized = false;

    public function setUp(): void
    {
        parent::setUp();
        if ($this->initialized) {
            $this->app->bind('request', function ($app) {
                return $this->request;
            });
            return;
        }
        $request = app('request');
        $this->initialized = true;
    }

    public function testHomeRouteController()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        
        $request = new Request();
        $request->setMethod('get');
        $request->replace(['debug' => 'true']);
        $this->app->bind('request', function ($app) use ($request) {
            return $request;
        });

        $class = new HomeController($request);
        $class->index($request);

        $this->assertEquals("HomeController", $class->class);
        $this->assertEquals(url()->previous(), $class->previousURL);
    }
}
