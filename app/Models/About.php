<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    // fillable table
    protected $fillable = ['title', 'content1', 'content1Text', 'content2', 'content2Text', 'image1', 'image2', 'image3', 'image4', 'image5', 'image6'];
}
