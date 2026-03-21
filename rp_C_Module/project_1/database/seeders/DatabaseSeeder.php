<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $books = json_decode(file_get_contents(database_path('data/books.json')), true);

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
