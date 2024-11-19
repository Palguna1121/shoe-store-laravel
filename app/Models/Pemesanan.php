<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';

    protected $fillable = [
        'user_id',
        'size_id',
        'product_id',
        'qty',
    ];

    protected $guarded = [
        'created_at',
        'updated_at',
    ];
}
