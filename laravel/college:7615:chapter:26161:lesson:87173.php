<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function(){});
Route::get("/search/{search}", function($search){
    return $search;
})->where('search','[A-Za-z]+');
Route::get('/posts', function(){
    return '';
});

