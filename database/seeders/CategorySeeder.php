<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('category')->insert([
            [
                'id' => 1,
                'category' => 'Digestive-Care',
                'link' => 'digestive.php',
                'image' => '67bd681e86014product-2.jpg',
                'banner_image' => '67bd86be87ef1about-banner.jpg',
                'is_parent' => null,
                'parent_id' => 15,
                'slug' => null,
            ],
            [
                'id' => 2,
                'category' => 'Immunity-Wellness',
                'link' => 'immunity.php',
                'image' => '67bd682d2479esubproduct-1.jpg',
                'banner_image' => '67bd881a3118cblog-2.jpg',
                'is_parent' => null,
                'parent_id' => 15,
                'slug' => null,
            ],
            [
                'id' => 3,
                'category' => 'Liver-Care',
                'link' => 'liver.php',
                'image' => '67bd683d8e301product-2.jpg',
                'banner_image' => '67bd884a37cbbblog-banner.jpg',
                'is_parent' => null,
                'parent_id' => 15,
                'slug' => null,
            ],
            [
                'id' => 4,
                'category' => 'Pain-Relief',
                'link' => 'pain.php',
                'image' => '67bd684893320product-1.jpg',
                'banner_image' => '67bd89a4b469eblog-1.jpg',
                'is_parent' => null,
                'parent_id' => 15,
                'slug' => null,
            ],
            [
                'id' => 14,
                'category' => 'Piles-Care',
                'link' => 'piles.php',
                'image' => '67bd685234826product-2.jpg',
                'banner_image' => '67bd89c479e8eblog-3.jpg',
                'is_parent' => null,
                'parent_id' => 16,
                'slug' => null,
            ],
            [
                'id' => 15,
                'category' => 'Shop-By-Category',
                'link' => null,
                'image' => '',
                'banner_image' => '',
                'is_parent' => 1,
                'parent_id' => null,
                'slug' => 'shop-by-category',
            ],
            [
                'id' => 16,
                'category' => 'shop-by-product',
                'link' => null,
                'image' => '',
                'banner_image' => '',
                'is_parent' => 1,
                'parent_id' => null,
                'slug' => 'shop-by-product',
            ],
        ]);
    }
}

