<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['image', 'name', 'author', 'publisher', 'publication_date', 'price', 'is_rented'];
}
