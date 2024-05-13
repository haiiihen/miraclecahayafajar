<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use HasFactory, Sluggable;
    // fillable table
    protected $fillable = ['article_title', 'article_content', 'image', 'slug'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'article_title'
            ]
        ];
    }

    // protected static function booted()
    // {
    //     static::creating(function ($post) {
    //         $post->slug = \Str::slug($post->title);
    //         $latestSlug =
    //             static::whereRaw("slug RLIKE '^{$post->slug}(-[0-9]*)?$'")
    //             ->latest('id')
    //             ->pluck('slug')
    //             ->first();

    //         if ($latestSlug) {
    //             $pieces = explode('-', $latestSlug);
    //             $number = intval(end($pieces));
    //             $post->slug .= '-' . ($number + 1);
    //         }
    //     });

    //     static::updating(function ($post) {
    //         $post->slug = \Str::slug($post->title);
    //         $latestSlug =
    //             static::whereRaw("slug RLIKE '^{$post->slug}(-[0-9]*)?$'")
    //             ->latest('id')
    //             ->pluck('slug')
    //             ->first();

    //         if ($latestSlug) {
    //             $pieces = explode('-', $latestSlug);
    //             $number = intval(end($pieces));
    //             $post->slug .= '-' . ($number + 1);
    //         }
    //     });
    // }
}
