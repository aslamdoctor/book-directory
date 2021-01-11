<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = Book::all();
        $languagesArray = Language::all();
        foreach($books as $book){
            foreach(range(1, rand(1,3)) as $index){
                DB::table('books_languages')->insert([
                    'book_id'       =>  $book->id,
                    'language_id'   =>  $languagesArray[rand(0, count($languagesArray)-1)]->id
                ]);
            }
        }
    }
}
