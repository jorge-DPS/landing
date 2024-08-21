<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MetaTagsController;
use App\Http\Controllers\LandingPageController;

Route::get('/', function () {
    return view('frontend.home.index');
});

//auth route
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//general route
Route::middleware(['auth'])->group(function () {

    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('/', [UserController::class, 'index'])->name('backend.user.index');
    });

    Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::post('/profile', [ProfileController::class, 'store'])->name('user.profile.store');

    //rutasNative
    Route::resource('metatags', MetaTagsController::class);
    Route::resource('landing', LandingPageController::class);

});

