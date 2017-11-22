<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Baskets;
use Auth;

class BasketsController extends Controller {

    public function index(){
        $baskets = Baskets::where('users_id', Auth::user()->id)->get();
        return view('baskets')->with('baskets', $baskets);
    }
    
    public function create(){

    }
}