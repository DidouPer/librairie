<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
  /**
   * Show a list of all of the application's users.
   *
   * @return Response
   */
  public function index()
  {
    // get all the nerds
      $books = \App\Book::all();

      return view('book.index', ['books' => $books]);

  }

     /**
      * Show the form for creating a new resource.
      *
      * @return Response
      */
     public function create()
     {
         return view('book.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @return Response
      */
     public function store()
     {
       // validate
      // read more on validation at http://laravel.com/docs/validation
      $rules = array(
          'book_title' => 'required',
          'book_price' => 'required|numeric',
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('nerds/create')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $book = new Book;
          $book->book_title = Input::get('book_title');
          $book->book_price = Input::get('book_price');
          $book->save();

          // redirect
          Session::flash('message', 'Successfully created book!');
          return Redirect::to('book');
     }
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

       return view('book.edit', $book);
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
     public function update($id)
     {
         //
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
