<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // fillable = ['content_product', 'content_product_text', 'image'];
    protected $fillable = ['title', 'subtitle', 'content_product', 'content_product_text', 'image'];
}
