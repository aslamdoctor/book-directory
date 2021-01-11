<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PublisherController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('categories', CategoryController::class)->except([
    'create', 'edit'
]);
Route::resource('authors', AuthorController::class)->except([
    'create', 'edit'
]);
Route::resource('languages', LanguageController::class)->except([
    'create', 'edit'
]);
Route::resource('publishers', PublisherController::class)->except([
    'create', 'edit'
]);
Route::resource('books', BookController::class)->except([
    'create', 'edit'
]);
