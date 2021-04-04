<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'address',
        'totalprice',
        'postcode',
        'phone-number',
        'content'
    ];

    public function getContentAttribute($value)
    {
    return unserialize($value);
    }
}
