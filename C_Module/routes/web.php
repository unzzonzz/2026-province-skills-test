<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

Route::view('/', 'index');
Route::view('/introduce', 'introduce');
Route::view('/library-state', 'library_state');
Route::view('/reading-room', 'reading_room');

Route::get('/data-room', [BookController::class, 'index']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/books/{id}/rent', [BookController::class, 'rent']);