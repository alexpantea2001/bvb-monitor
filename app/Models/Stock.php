<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'symbol',
        'isin',
        'company',
        'price',
        'change',
        'date',
        'category',
        'is_active'
    ];
}
