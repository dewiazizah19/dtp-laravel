<?php

use App\Http\Controllers\viewcontroller;
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

Route::get('/', [viewcontroller::class, 'index']);

Route::get('/dashboard.html', [viewcontroller::class, 'dashboard']);

Route::get('/icons.html', [viewcontroller::class, 'icons']);

Route::get('/map.html', [viewcontroller::class, 'map']);

Route::get('/notifications.html', [viewcontroller::class, 'notifications']);

Route::get('/user.html', [viewcontroller::class, 'user']);

Route::get('/tables.html', [viewcontroller::class, 'tables']);

Route::get('/typography.html', [viewcontroller::class, 'typography']);

Route::get('/upgrade.html', [viewcontroller::class, 'upgrade']);