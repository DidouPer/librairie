<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Input;

class BookController extends Controller
{
  public function index()
  {
      $books = Book::All();
      return view('book.index',compact('books'));
  }

  public function create(){
    $book=new Book;
    return view('book.create',compact('book'));
  }
  public function store(Request $request)
    {
      //dd($request);
        $book = Book::create([
            'book_title' => $request->get('title'),
            'book_price' => $request->get('price'),
            'book_quantity' => $request->get('quantity'),

        ]);
        return redirect(route('book'));
    }




     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return Response
      */
     public function show($id)
     {
       $book = \App\Book::find($id);

       return view('book.show', ['book' => $book]);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return Response
      */
     public function edit($id)
     {
       $book = \App\Book::find($id);

       return view('book.edit', ['book' => $book]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  int  $id
      * @return Response
      */
     public function update(Request $request,$id)
     {
       // validate
        $book = \App\Book::find($id);
        $book->book_title = $request->book_title;
        $book->book_price = $request->book_price;
        $book->book_quantity = $request->book_quantity;
        $book->save();
          return redirect(route('book'));
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return Response
      */
     public function destroy($id)
     {
         //
     }

 }
