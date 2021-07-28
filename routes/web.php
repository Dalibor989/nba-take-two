<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

Route::group([
    'middleware' => 'auth'
], function() {
    Route::get('/', [TeamController::class, 'index']);
    Route::get('/teams/{team}', [TeamController::class, 'show'])->name('show.teams');
    
    Route::get('/players/{player}', [PlayerController::class, 'show'])->name('show.players');

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/teams/{team}/comments', [CommentController::class, 'store'])->name('post.comment');
});

Route::group([
    'middleware' => 'guest'
], function() {
    Route::get('/register', [AuthController::class, 'getRegisterForm'])->name('show.register');
    Route::post('/register', [AuthController::class, 'register']);
    
    Route::get('/login', [AuthController::class, 'getLoginForm']);
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});