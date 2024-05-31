<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'home']);

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);

Route::get('/board', fn () => view('board.main', ['title' => 'Mading']));
Route::get('/festfun-season-4', fn () => view('board.show-festfun', ['title' => 'Mading']));
Route::get('/bulan-bahasa', fn () => view('board.show-bulbas', ['title' => 'Mading']));
Route::get('/job-and-fair', fn () => view('board.show-jobfair', ['title' => 'Mading']));
Route::get('/dashboard', fn () => view('dashboard.main', ['title' => 'Dashboard']));
Route::get('/moderation', fn () => view('dashboard.moderation', ['title' => 'Moderasi']));
