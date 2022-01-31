<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Book;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index() {

       $context = ['books' => DB::table('books')->get()];
       return view('index', $context);
    }

    public function detail(Book $bookID) {
        return view('detail', ['book' => $bookID]);
    }
}
