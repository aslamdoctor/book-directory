<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\AuthorStoreRequest;
use App\Http\Requests\AuthorUpdateRequest;

class AuthorController extends Controller
{
    /**
     * Listing
     */
    public function index()
    {
        $author = new Author();
        return $author->all();
    }


    /**
     * Create new
     */
    public function store(AuthorStoreRequest $request)
    {
        $author = new Author();
        $author->name = $request->name;
        $author->description = $request->description;
        $author->save();

        return $author;
    }

    /**
     * Display single
     */
    public function show(Author $author)
    {
        return $author;
    }


    /**
     * Update
     */
    public function update(AuthorUpdateRequest $request, Author $author)
    {
        $author->name = $request->name;
        $author->description = $request->description;

        $author->save();
        return $author;
    }

    /**
     * Delete
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
