<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\BookController;

Route::view('/', 'index');
Route::view('introduce', 'introduce');

Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('logout', 'logout');
});

Route::get('reading_room', [ReservationController::class, 'index']);
Route::post('reservation', [ReservationController::class, 'reserve']);

Route::get('data_room', [BookController::class, 'index']);
Route::get('data_room/{id}/rent', [BookController::class, 'rent']);
Route::get('mypage', [MypageController::class, 'index']);