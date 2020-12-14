<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('publication_date');
            $table->string('publication_location');
            $table->string('isbn');
            $table->string('doi');
            $table->string('cover');
            $table->unsignedInteger('no_of_pages');

            $table->timestamps();

            $table->foreignId('author_id')
                ->constrained('authors')
                ->onDelete('cascade');
            $table->foreignId('publisher_id')
                ->constrained('publishers')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
