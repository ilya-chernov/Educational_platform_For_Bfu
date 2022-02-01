<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('landing');;
Route::get('/library', [BooksController::class, 'index'])->name('library');
Route::post('/library', [BooksController::class, 'storeForm'])->name('book.store');
Route::get('/library/add', [BooksController::class, 'showAddForm'])->name('book.add');
Route::get('library/{bookID}', [BooksController::class, 'detail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
