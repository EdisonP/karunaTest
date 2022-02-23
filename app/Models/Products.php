<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'price',
        'details',
        'published',
        'created_at',
        'updated_at',
    ];
}
