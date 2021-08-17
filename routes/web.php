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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard.html', function () {
    return view('dashboard');
});

Route::get('/icons.html', function () {
    return view('icons');
});

Route::get('/map.html', function () {
    return view('map');
});

Route::get('/notifications.html', function () {
    return view('notifications');
});

Route::get('/user.html', function () {
    return view('user');
});

Route::get('/tables.html', function () {
    return view('tables');
});

Route::get('/typography.html', function () {
    return view('typography');
});

Route::get('/upgrade.html', function () {
    return view('upgrade');
});