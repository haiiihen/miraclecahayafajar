<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'subtitle' => 'Our Articles',
            'title' => 'Tea has a complex positive effect on the body',
            'article_title' => 'Nature close tea',
            'image' => 'article-1.jpg',
            'article_content' => 'Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed',
        ]);

        DB::table('articles')->insert([
            'subtitle' => 'Our Articles',
            'title' => 'Tea has a complex positive effect on the body',
            'article_title' => 'Nature close tea',
            'image' => 'article-2.jpg',
            'article_content' => 'Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed',
        ]);

        DB::table('articles')->insert([
            'subtitle' => 'Our Articles',
            'title' => 'Tea has a complex positive effect on the body',
            'article_title' => 'Nature close tea',
            'image' => 'article-3.jpg',
            'article_content' => 'Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed',
        ]);

        DB::table('articles')->insert([
            'subtitle' => 'Our Articles',
            'title' => 'Tea has a complex positive effect on the body',
            'article_title' => 'Nature close tea',
            'image' => 'article-4.jpg',
            'article_content' => 'Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed',
        ]);

        DB::table('articles')->insert([
            'subtitle' => 'Our Articles',
            'title' => 'Tea has a complex positive effect on the body',
            'article_title' => 'Nature close tea',
            'image' => 'article-5.jpg',
            'article_content' => 'Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed',
        ]);

        DB::table('articles')->insert([
            'subtitle' => 'Our Articles',
            'title' => 'Tea has a complex positive effect on the body',
            'article_title' => 'Nature close tea',
            'image' => 'article-6.jpg',
            'article_content' => 'Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed',
        ]);
    }
}
