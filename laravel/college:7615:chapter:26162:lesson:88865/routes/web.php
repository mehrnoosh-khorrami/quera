<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::any('/', function (Request $request) 
{
    $debugHeader = $request->header('debug', 'false');
    $requestMethod = $request->method();
    if ($debugHeader == 'true'){
        return view('welcome');
    }else{
        if($requestMethod == 'GET' || $requestMethod == 'POST'){
            return view('welcome');
        }else{
            abort(405);
        }
    }
});
