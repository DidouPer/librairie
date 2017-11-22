<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = [
      'book_title', 'book_price', 'book_quantity',
  ];


}
