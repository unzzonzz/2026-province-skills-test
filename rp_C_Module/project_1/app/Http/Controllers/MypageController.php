<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Rental;

class MypageController extends Controller
{
    public function index() {
        $rentals = Rental::where('user_id', auth()->id())->get();
        $reservations = Reservation::where('user_id', auth()->id())->where(function ($query) {
            $query->where('reservation_date', '>', now()->format('Y-m-d'))
                ->orWhere(function ($query) {
                    $query->where('reservation_date', now()->format('Y-m-d'))
                    ->where('end_time', '>', now()->format('H:i:s'));
                });
        })->get();
        
        return view('mypage', compact('rentals', 'reservations'));
    }

    public function admin() {
        $rentals = Rental::all();
        $reservations = Reservation::all();

        return view('check_reservation', compact('rentals', 'reservations'));
    }
}
