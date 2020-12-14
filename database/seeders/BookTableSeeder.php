<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Publisher;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 20) as $index) {
            $authorsArray = Author::all();
            $author = $authorsArray[rand(0, count($authorsArray)-1)];
            $publishersArray = Publisher::all();
            $publisher = $publishersArray[rand(0, count($publishersArray)-1)];

            DB::table('books')->insert([
                'title' => $faker->sentence(2),
                'description' => $faker->sentence(5),
                'publication_date' => $faker->date('Y-m-d'),
                'publication_location' => $faker->sentence(5),
                'isbn' => $faker->isbn13(),
                'doi' => $faker->ean8(),
                'cover' => '',
                'no_of_pages' => $faker->biasedNumberBetween(100, 600),

                'author_id' => $author->id,
                'publisher_id' => $publisher->id,

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
