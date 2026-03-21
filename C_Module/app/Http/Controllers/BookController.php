<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Rental;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();

        return view('data_room', compact('books'));
    }

    public function rent($id) {
        Rental::create([
            'user_id' => auth()->id(),
            'book_id' => $id
        ]);

        return back();
    }
}
