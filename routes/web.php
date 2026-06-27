<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\IdeaController;

Route::redirect('/', '/ideas');

Route::middleware('auth')->group(function () {
    Route::delete('/logout', [SessionsController::class, 'destroy']);

    Route::get('/ideas', [IdeaController::class, 'index']);
    Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('idea.show');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::post('/login', [SessionsController::class, 'store']);
});


