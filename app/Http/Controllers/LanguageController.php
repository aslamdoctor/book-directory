<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Http\Requests\LanguageStoreRequest;
use App\Http\Requests\LanguageUpdateRequest;

class LanguageController extends Controller
{
    /**
     * Listing
     */
    public function index()
    {
        $language = new Language();
        return $language->all();
    }


    /**
     * Create new
     */
    public function store(LanguageStoreRequest $request)
    {
        $language = new Language();
        $language->name = $request->name;
        $language->save();

        return $language;
    }

    /**
     * Display single
     */
    public function show(Language $language)
    {
        return $language;
    }


    /**
     * Update
     */
    public function update(LanguageUpdateRequest $request, Language $language)
    {
        $language->name = $request->name;
        $language->save();
        return $language;
    }

    /**
     * Delete
     */
    public function destroy(Language $language)
    {
        $language->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
