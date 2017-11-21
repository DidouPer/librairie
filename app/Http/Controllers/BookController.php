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
      $books = DB::select('select * from Book', [1]);

      return view('books.index', ['books' => $books]);
  }
}
