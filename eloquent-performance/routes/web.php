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

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.home');

Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.home');

Route::get('/aggregation', [\App\Http\Controllers\PostController::class, 'aggregationWithPosts'])->name('posts.aggregation');

Route::get('/top', [\App\Http\Controllers\UserController::class, 'topUsers'])->name('users.top');
