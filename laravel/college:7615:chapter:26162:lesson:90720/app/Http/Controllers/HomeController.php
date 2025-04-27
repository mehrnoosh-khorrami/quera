<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function handleRequest(Request $request) {
        $request->validate([
            'mobile' => ['required_with:name,message', 'max:11'],
            'message' => ['required_with_all:name,mobile', 'max:100'],
            'captcha' => ['required', Rule::in([16, 10, 76])]
        ]);
    }
}
