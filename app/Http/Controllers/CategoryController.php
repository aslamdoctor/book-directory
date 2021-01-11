<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    /**
     * Listing
     */
    public function index()
    {
        $category = new Category();
        return $category->all();
    }


    /**
     * Create new
     */
    public function store(CategoryStoreRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->thumbnail = $request->thumbnail;
        $category->save();

        return $category;
    }

    /**
     * Display single
     */
    public function show(Category $category)
    {
        return $category;
    }


    /**
     * Update
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->thumbnail = $request->thumbnail;

        $category->save();
        return $category;
    }

    /**
     * Delete
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
