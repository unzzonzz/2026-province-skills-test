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
        if (!auth()->check()) {
            return back()->with('not_login', true);
        }

        Rental::create([
            'book_id' => $id,
            'user_id' => auth()->id(),
        ]);

        Book::find($id)->update(['is_rented' => true]);

        return back();
    }

    public function return($id) {
        Book::find($id)->update(['is_rented' => false]);
        Rental::where('book_id', $id)->delete();

        return back();
    }

    public function register(Request $request) {
        $image = $request->file('image')->store('books/images', 'public');

        Book::create([
            'name' => $request->name,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'image' => $image,
            'publication_date' => $request->publication_date,
            'price' => $request->price,
        ]);

        return back();
    }
}
