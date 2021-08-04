<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

Route::get('/', [CardController::class, 'index'])->name('cards.index');

Route::get('cards/{card}', [CardController::class, 'show'])->name('cards.show');

Route::get('category/{category}', [CardController::class, 'category'])->name('cards.category');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
