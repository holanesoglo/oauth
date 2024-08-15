<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

# Socialite URLs

// La page où on présente les liens de redirection vers les providers
Route::get("login-register", [SocialiteController::class, 'register_login']);

// La redirection vers le provider
Route::get("redirect/{provider}", [SocialiteController::class,'redirect'])->name('socialite.redirect');
// Route::get("redirect/linkedin", [SocialiteController::class,'redirect'])->name('socialite.redirect');
// Route::get("redirect/google", [SocialiteController::class,'redirect'])->name('socialite.redirect');
// Route::get("redirect/facebook", [SocialiteController::class,'redirect'])->name('socialite.redirect');

// Le callback du provider
Route::get("callback/{provider}", [SocialiteController::class,'callback'])->name('socialite.callback');
// Route::get("callback/linkedin", [SocialiteController::class,'callback'])->name('socialite.callback');
// Route::get("callback/google", [SocialiteController::class,'callback'])->name('socialite.callback');
// Route::get("callback/facebook", [SocialiteController::class,'callback'])->name('socialite.callback');
