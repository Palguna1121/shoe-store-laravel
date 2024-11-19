<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'name',
        'description',
        'price',
        'url_image',
        'qty',
    ];

    protected $guarded = [
        "created_at",
        "updated_at",
    ];
}
