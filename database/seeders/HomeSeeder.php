<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homes')->insert([
            'carousel_image_1' => 'carousel-1.jpg',
            'subtitle_carousel_1' => 'Welcome to Vanilla Papua Indonesia',
            'title_carousel_1' => 'Organic & Quality Vanilla Product',
            'carousel_image_2' => 'carousel-2.jpg',
            'subtitle_carousel_2' => 'Welcome to TEA House',
            'title_carousel_2' => 'Organic & Quality Tea Production',
            'title_content_advantages' => 'Tea is a drink of health and beauty',
            'subtitle_content_advantages_text' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit',
            'list_advantages' => 'Great tea assortment, Unique accessories, Spices & additives, Good for health & beauty',
            'list_benefits' => 'Pure and Organic, Free Sample, Security Payment, 24/7 Support',
            'list_content_benefits' => 'Pure and Organic, Free Sample, 100% security payment, Support every time fast',
        ]);
    }
}
