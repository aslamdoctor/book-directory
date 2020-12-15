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

Route::resource('category', CategoryController::class)->except([
    'create', 'edit'
]);
Route::resource('author', AuthorController::class)->except([
    'create', 'edit'
]);
Route::resource('language', LanguageController::class)->except([
    'create', 'edit'
]);
Route::resource('publisher', PublisherController::class)->except([
    'create', 'edit'
]);
Route::resource('book', BookController::class)->except([
    'create', 'edit'
]);
