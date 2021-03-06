<?php

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

/**
 * Admin routes
 */

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        dd(get_class(), 'dashboard');
    });
});

/**
 * User routes
 */

Route::resource('/', 'PostsController');

