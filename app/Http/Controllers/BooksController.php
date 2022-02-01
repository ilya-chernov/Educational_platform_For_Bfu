<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function showAddForm() {
        $context = ['subjects' => DB::table('subjects')->get()];
        return view('bookadd', $context);
    }

    public function storeForm (Request $request) {
        $imageName = time().'.'.$request->image->extension();

      Auth::user()->Books()->create([
          'subject_id' => $request->subject,
          'title' => $request->title,
          'description' => $request->description,
          'book_link' => $request->book_link,
          'img_link' =>  $request->image->move('books_img', $imageName)
      ]);

      return redirect()->route('library');
    }
}
