<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;

class HomeController
{
    public function index()
    {
        //
    }
    
    public function testView()
    {
        echo View::render("index", ['message'=>'Hello, World!']);
    }
}
