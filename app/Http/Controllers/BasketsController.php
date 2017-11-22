<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Baskets;
//use App\Book;
//use App\User;

class BasketsController extends Controller {

    public function index(){
        if ($user = Auth::user()) {
            $baskets = Baskets::where('users_id', Auth::user()->id)->get();
            //dd(Auth::guest());
            //ssdd(Auth::user()->id);
            return view('baskets.index',compact('baskets'));
        }
        else {
            return view('home');
        }

    }
    
    public function create(){

    }

    public function store(){

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