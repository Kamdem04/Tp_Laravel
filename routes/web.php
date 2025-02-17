<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/books.show', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\LivreController::class, 'index']);
// Route::get('/livres/{id}', 'BookController@show')->name('books.show');
Route::get('/livres/{id}', [App\Http\Controllers\LivreController::class, 'show'])->name('books.show');
Route::get('/con', [App\Http\Controllers\LivreController::class, 'index']);