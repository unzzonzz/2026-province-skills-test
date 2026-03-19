<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['image', 'title', 'author', 'publication_date', 'price'];

    public function rents() {
        return $this->hasMany(Rent::class);
    }
}
