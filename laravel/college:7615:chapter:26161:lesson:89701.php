<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {})->name('home');
Route::get('/posts/{year}/{slug}', function () {
})->where([
    'year' => '\d{4}',
    'slug' => '[A-Za-z\-]+'
])->name('posts.show');
Route::prefix('user')->name('user.')->group(function () {
    Route::get('/profile', function () {})->name('profile');
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/edit', function () {})->name('edit');
        Route::post('/edit', function () {})->name('edit');
    });
});
