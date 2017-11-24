<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Baskets;
//use App\Book;
//use App\User;

class BasketsController extends Controller {

    public function index(){
        if ($user = Auth::user()) {
            //$baskets = Baskets::where('users_id', Auth::user()->id)->get(); //->orderedWhat();
            //$test = $baskets->orderedWhat();
            $baskets = DB::table('baskets')
                ->join('books', 'book_id', '=', 'books.id')
                ->join('users', 'users_id', '=', 'users.id')
                ->select('books.book_title', 'books.book_price')
                ->where('users_id', Auth::user()->id)
                ->get();
            //echo $baskets->pivot->book_title;
            //dd(Auth::guest());
            //ssdd(Auth::user()->id);
            return view('basket.index', compact('baskets'));
        }
        else {
            return view('auth.login');
        }

    }
    
    public function create(){
        if ($user = Auth::user()) {
            return view('basket.create');
        }
        else{
            return view('auth.login');
        }
    }

    public function store(Request $request){
        dd($request);
    }

    public function show($id){

    }

    public function edit($id){
        
    }

    public function update($id){
        
    }

    public function delete(){

    }
}