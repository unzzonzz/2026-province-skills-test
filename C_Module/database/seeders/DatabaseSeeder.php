<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $json = file_get_contents(storage_path('books.json'));
        $data = json_decode($json, true);

        foreach ($data as $item) {
            DB::table('books')->insert([
               'image' => $item['이미지'],
               'title' => $item['서명'],
               'author' => $item['저자'],
               'publication_date' => $item['발행년'],
               'price' => $item['가격'],
            ]);
        }
    }
}
