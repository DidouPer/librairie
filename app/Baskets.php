<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baskets extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_baskets', 'users_id', 'id');
    }

    public function book(){
        return $this->belongsToMany('App\Book', 'books_baskets', 'books_id', 'id')
            ->withPivot('books_title', 'title')
            ->withPivot('books_price', 'price');
        ;
    }
}
