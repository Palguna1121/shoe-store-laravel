<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'size';

    protected $fillable = [
        'size',
    ];

    protected $guarded = [
        'created_at',
        'updated_at',
    ];
}
