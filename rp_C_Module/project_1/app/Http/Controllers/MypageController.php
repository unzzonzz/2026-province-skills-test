<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class MypageController extends Controller
{
    public function index() {
        // $reservations = Reservation::where('user_id', auth()->id())->get();
        $reservations = Reservation::where(function ($query) {
            $query->where('reservation_date', '>', now()->format('Y-m-d'))
                ->where('user_id', auth()->id())
                ->orWhere(function ($query) {
                    $query->where('reservation_date', now()->format('Y-m-d'))
                    ->where('end_time', '>', now()->format('H:i:s'));
                });
        })->get();
        
        return view('mypage', compact('reservations'));
    }
}
