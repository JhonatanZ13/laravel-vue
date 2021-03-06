<?php

use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\UserController;
use Illuminate\Support\Facades\Auth;
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

/* Route::get('/', function () {
    return view('welcome');
})->name('home'); */

Route::prefix('dashboard')->group(function () {
    Route::resource('post', PostController::class);
    Route::post('post/{post}/image', [PostController::class, 'image'])->name('post.image');
    Route::resource('category', CategoryController::class);
    Route::resource('user', UserController::class);
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
