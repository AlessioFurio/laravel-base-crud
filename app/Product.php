<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['brand', 'size', 'color', 'price', 'description'];
}
