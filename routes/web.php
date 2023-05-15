<?php

use App\Http\Controllers\PostController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['middleware' => 'auth'], function() {
    Route::resource('posts', \App\Http\Controllers\PostController::class);
    Route::inertia('pages/about', 'About')->name('pages.about');
    Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'destroy'])->name('logout');
});

Route::get('register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'create'])->name('register.create');
Route::post('register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])->name('register.post');
Route::get('/', [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login.index');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'store'])->name('login.post');
