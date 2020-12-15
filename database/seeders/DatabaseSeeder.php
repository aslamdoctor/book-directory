<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BookTableSeeder;
use Database\Seeders\AuthorTableSeeder;
use Database\Seeders\CategoryTableSeeder;
use Database\Seeders\LanguageTableSeeder;
use Database\Seeders\PublisherTableSeeder;
use Database\Seeders\BooksLanguagesTableSeeder;
use Database\Seeders\BooksCategoriesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $authorTableSeeder = new AuthorTableSeeder();
        $authorTableSeeder->run();

        $categoryTableSeeder = new CategoryTableSeeder();
        $categoryTableSeeder->run();

        $languageTableSeeder = new LanguageTableSeeder();
        $languageTableSeeder->run();

        $publisherTableSeeder = new PublisherTableSeeder();
        $publisherTableSeeder->run();

        $bookTableSeeder = new BookTableSeeder();
        $bookTableSeeder->run();

        $booksCategoriesTableSeeder = new BooksCategoriesTableSeeder();
        $booksCategoriesTableSeeder->run();

        $booksLanguagesTableSeeder = new BooksLanguagesTableSeeder();
        $booksLanguagesTableSeeder->run();

    }
}
