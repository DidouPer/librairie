<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Input;

class BookController extends Controller
{
  public function index()
  {
      $books=Book::all();
      return view('book.index', compact('books'));
  }

  public function create(){
    $book=new Book;
    return view('book.create',compact('book'));
  }
  public function store(Request $request)
    {
      //dd($request);
        $book = Book::create([
            'book_title' => $request->get('book_title'),
            'book_price' => $request->get('book_price'),
            'book_quantity' => $request->get('book_quantity'),

        ]);
        return redirect(route('books'));
    }
    public function edit($id){
      $book=Book::find($id);
      return view('book.edit',compact('book'));
    }
    public function update(Request $request)
      {
        //dd($request);
          $book = Book::edit([
              'book_title' => $request->get('book_title'),
              'book_price' => $request->get('book_price'),
              'book_quantity' => $request->get('book_quantity'),

          ]);
          return redirect(route('books'));
      }



}
