<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baskets extends Model
{
    protected $table = 'baskets';
    public $timestamps = true;

    public function isOrderedBy()
    {
        return $this->belongsTo('User', 'id');
    }

    public function orderedWhat()
    {
        return $this->belongsToMany('Book', 'id');
    }

}
