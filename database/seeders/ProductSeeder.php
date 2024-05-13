<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'title' => 'Our Products',
            'subtitle' => 'Tea has a complex positive effect on the body',
            'image' => 'product-1.jpg',
            'content_product' => 'Vanilla Planifolia',
            'content_product_text' => 'It is longer and slender, with a very strong vanilla flavor and aroma and oily skin.',
        ]);

        DB::table('products')->insert([
            'title' => 'Our Products',
            'subtitle' => 'Tea has a complex positive effect on the body',
            'image' => 'product-2.jpg',
            'content_product' => 'Vanilla Tahiti',
            'content_product_text' => 'They are shorter, thicker, and contain a higher oil and water content than cherry, or plum.',
        ]);

        DB::table('products')->insert([
            'title' => 'Our Products',
            'subtitle' => 'Tea has a complex positive effect on the body',
            'image' => 'product-3.jpg',
            'content_product' => 'Extract Vanilla Non-Alcohol',
            'content_product_text' => 'Pure vanilla essence without the alcohol. Versatile for baking and beverages.',
        ]);

        DB::table('products')->insert([
            'title' => 'Our Products',
            'subtitle' => 'Tea has a complex positive effect on the body',
            'image' => 'product-4.jpg',
            'content_product' => 'Vanilla Powder',
            'content_product_text' => 'Concentrated vanilla flavour in a convenient powder form. Perfect for desserts and drinks.',
        ]);

        DB::table('products')->insert([
            'title' => 'Our Products',
            'subtitle' => 'Tea has a complex positive effect on the body',
            'image' => 'product-4.jpg',
            'content_product' => 'Vanilla Seed',
            'content_product_text' => 'Intense vanilla flavour in tiny, potent seeds. Ideal for infusing creams and syrups.',
        ]);
    }
}
