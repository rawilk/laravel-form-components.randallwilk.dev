<?php

use App\Http\Controllers\ComponentsController;
use Illuminate\Support\Facades\Route;

Route::view('/privacy', 'pages.privacy.index')->name('privacy');
Route::view('/terms', 'pages.terms.index')->name('terms');
Route::get('/components', [ComponentsController::class, 'index'])->name('demos');
Route::get('/components/{component}', [ComponentsController::class, 'show'])->name('component');
Route::view('/', 'pages.home.index')->name('home');
