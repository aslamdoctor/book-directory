<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Http\Requests\PublisherStoreRequest;
use App\Http\Requests\PublisherUpdateRequest;

class PublisherController extends Controller
{
    /**
     * Listing
     */
    public function index()
    {
        $publisher = new Publisher();
        return $publisher->all();
    }


    /**
     * Create new
     */
    public function store(PublisherStoreRequest $request)
    {
        $publisher = new Publisher();
        $publisher->name = $request->name;
        $publisher->description = $request->description;
        $publisher->save();

        return $publisher;
    }

    /**
     * Display single
     */
    public function show(Publisher $publisher)
    {
        return $publisher;
    }


    /**
     * Update
     */
    public function update(PublisherUpdateRequest $request, Publisher $publisher)
    {
        $publisher->name = $request->name;
        $publisher->description = $request->description;

        $publisher->save();
        return $publisher;
    }

    /**
     * Delete
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
