<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\CanBeBought;

class Products extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'name',
        'type',
        'price',
    ];

}
