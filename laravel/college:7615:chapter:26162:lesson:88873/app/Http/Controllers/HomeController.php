<?php

namespace App\Http\Controllers;

use App\Rules\CheckPrime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        if ($request->validate(['number' => [new CheckPrime(20)]])){
            return "OK!";
        }
    }
}
