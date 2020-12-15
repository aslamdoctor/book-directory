<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;

class BookController extends Controller
{
    /**
     * Listing
     */
    public function index()
    {
        $book = new Book();
        return $book->with(['categories', 'languages'])->get();
    }


    /**
     * Create new
     */
    public function store(BookStoreRequest $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->publication_date = $request->publication_date;
        $book->publication_location = $request->publication_location;
        $book->isbn = $request->isbn;
        $book->doi = $request->doi;
        $book->cover = $request->cover;
        $book->no_of_pages = $request->no_of_pages;
        $book->author_id = $request->author_id;
        $book->publisher_id = $request->publisher_id;

        $book->save();

        $categories  = $request->categories;
        if(count($categories) > 0){
            $book->categories()->attach($categories);
        }

        $languages  = $request->languages;
        if(count($languages) > 0){
            $book->languages()->attach($languages);
        }

        $book->load('categories', 'languages');

        return $book;
    }

    /**
     * Display single
     */
    public function show(Book $book)
    {
        $book->load('categories', 'languages');
        return $book;
    }


    /**
     * Update
     */
    public function update(BookUpdateRequest $request, Book $book)
    {
        $book->title = $request->title;
        $book->description = $request->description;
        $book->publication_date = $request->publication_date;
        $book->publication_location = $request->publication_location;
        $book->isbn = $request->isbn;
        $book->doi = $request->doi;
        $book->cover = $request->cover;
        $book->no_of_pages = $request->no_of_pages;
        $book->author_id = $request->author_id;
        $book->publisher_id = $request->publisher_id;

        $book->save();

        $categories  = $request->categories;
        if(count($categories) > 0){
            $book->categories()->sync($categories);
        }

        $languages  = $request->languages;
        if(count($languages) > 0){
            $book->languages()->sync($languages);
        }

        $book->load('categories', 'languages');

        return $book;
    }

    /**
     * Delete
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
