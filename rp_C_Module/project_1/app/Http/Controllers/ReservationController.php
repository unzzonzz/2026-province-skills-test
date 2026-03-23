<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index() {
        // 어려운 코드 ㅎㅎ
        $reservations = Reservation::where(function ($query) {
            $query->where('reservation_date', '>', now()->format('Y-m-d'))
                ->orWhere(function ($query) {
                    $query->where('reservation_date', now()->format('Y-m-d'))
                        ->where('end_time', '>', now()->format('H:i:s'));
                });
        })->get();

        return view('reading_room', compact('reservations'));
    }

    public function reserve(Request $request) {
        if (!auth()->check()) {
            return back()->with('not_login', true);
        }

        $seats = json_decode($request->seats);

        $conflict = Reservation::where('reservation_date', $request->reservation_date)
            ->where('start_time', '<', $request->end_time)
            ->where('end_time', '>', $request->start_time)
            ->where(function ($query) use ($seats) {
                foreach ($seats as $seat) {
                    $query->orWhereJsonContains('seats', $seat);
                }
            })->exists();

        if ($conflict) return back()->with('reserve_error', true);
    
        Reservation::create([
            'user_id' => auth()->id(),
            'seats' => $seats,
            'reservation_date' => $request->reservation_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return back();
    }

    public function delete($id) {
        Reservation::destroy($id);

        return back();
    }
}
