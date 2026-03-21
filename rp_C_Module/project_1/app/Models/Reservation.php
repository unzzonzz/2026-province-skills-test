<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['user_id', 'seats', 'reservation_date', 'start_time', 'end_time'];

    protected $casts = ['seats' => 'array'];
}
