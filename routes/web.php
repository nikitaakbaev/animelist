<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use Inertia\Inertia;

Route::get('/', [AnimeController::class, 'index'])->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
