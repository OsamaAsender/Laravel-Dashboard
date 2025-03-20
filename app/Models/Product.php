<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 
        'description', 
        'category_name', // Add this field
        'price',
        'stock',
        'image'
    ];
    
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
}
