<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {});
Route::get('/{query}', function () {
    return redirect()->to('/');
})->where('query','.*');