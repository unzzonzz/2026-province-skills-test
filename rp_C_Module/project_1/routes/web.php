<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PopupController;

Route::get('/', function () {
    $popups = App\Models\Popup::where('end_date', '>=', now()->format('Y-m-d'))->get();

    return view('index', compact('popups'));
});
Route::view('introduce', 'introduce');
Route::view('register_book', 'register_book');
Route::view('library_status', 'library_status');

Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('logout', 'logout');
});

Route::get('reading_room', [ReservationController::class, 'index']);
Route::post('reservation', [ReservationController::class, 'reserve']);
Route::delete('reservation/{id}', [ReservationController::class, 'delete']);
Route::get('popup_management', [PopupController::class, 'index']);
Route::get('popup/{id}/edit', [PopupController::class, 'edit']);
Route::post('popup/register', [PopupController::class, 'register']);
Route::post('popup/{id}/update', [PopupController::class, 'update']);
Route::delete('popup/{id}', [PopupController::class, 'delete']);
Route::get('data_room', [BookController::class, 'index']);
Route::get('mypage', [MypageController::class, 'index']);
Route::get('check_reservation', [MypageController::class, 'admin']);
Route::post('book/{id}/rent', [BookController::class, 'rent']);
Route::post('book/{id}/return', [BookController::class, 'return']);
Route::post('book/register', [BookController::class, 'register']);