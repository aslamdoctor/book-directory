<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = Book::all();
        $categoriesArray = Category::all();
        foreach($books as $book){
            foreach(range(1, rand(1,3)) as $index){
                DB::table('books_categories')->insert([
                    'book_id'       =>  $book->id,
                    'category_id'   =>  $categoriesArray[rand(0, count($categoriesArray)-1)]->id
                ]);
            }
        }
    }
}
