<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/library', [BooksController::class, 'index']);
Route::get('library/{bookID}', [BooksController::class, 'detail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
