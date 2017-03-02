<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartLine extends Model
{
    protected $table = 'cart_lines';


    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
