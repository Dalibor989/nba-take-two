<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

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

Route::get('/', [TeamController::class, 'index']);
Route::get('/teams/{team}', [TeamController::class, 'show'])->name('show.teams');

Route::get('/players/{player}', [PlayerController::class, 'show'])->name('show.players');

Route::get('/register', [AuthController::class, 'getRegisterForm'])->name('show.register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'getLoginForm']);
Route::post('/login', [AuthController::class, 'login']);