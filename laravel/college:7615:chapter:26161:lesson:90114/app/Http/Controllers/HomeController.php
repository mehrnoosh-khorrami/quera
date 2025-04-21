<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $class, $previousURL;
    
    public function index(Request $request) {
        if ($request->query('debug') === 'true'){
            $this->class = class_basename($this);
            $this->previousURL = url()->previous();
        }
    }
}

