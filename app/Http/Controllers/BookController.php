<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Input;

class BookController extends Controller
{
  public function index()
  {

      return view('books.index');
  }

  public function create(){
    $book=new Book;
    return view('books.create',compact('book'));
  }
  public function store(Request $request)
    {
      //dd($request);
        $book = Book::create([
            'book_title' => $request->get('title'),
            'book_price' => $request->get('price'),
            'book_quantity' => $request->get('quantity'),

        ]);
        return redirect(route('books'));
    }

}
