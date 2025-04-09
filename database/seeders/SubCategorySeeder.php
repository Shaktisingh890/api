<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('subcategory')->insert([
            [
                'id' => 1,
                'subcategory' => 'Shop By Product',
                'category_id' => 2,
                'link' => 'product-page.php',
                'image' => '67ad945239bd3blog-1.jpg',
                'banner_image' => '67ad945109fe6blog-1.jpg',
                'status' => 'Active',
            ],
            [
                'id' => 2,
                'subcategory' => 'Shop By Category',
                'category_id' => 2,
                'link' => 'category-page.php',
                'image' => '67ad9556804e9blog-1.jpg',
                'banner_image' => '67ad9555519d8blog-1.jpg',
                'status' => 'Active',
            ],
        ]);
    }
}
