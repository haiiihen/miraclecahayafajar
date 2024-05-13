<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'image1' => 'about-1.jpg',
            'image2' => 'about-2.jpg',
            'image3' => 'about-3.jpg',
            'image4' => 'about-4.jpg',
            'title' => 'About Us',
            'subtitle' => 'The success history of TEA House in 25 years',
            'image5' => 'about-5.jpg',
            'content1' => 'Our tea is one of the most popular drinks in the world',
            'content1_text' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit',
            'image6' => 'about-6.jpg',
            'content2' => 'Daily use of a cup of tea is good for your health',
            'content2_text' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit',
        ]);
    }
}
