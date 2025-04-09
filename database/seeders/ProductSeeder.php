<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'code' => 'PROD001',
                'category_name' => 'Ayurvedic',
                'category_id' => '1',
                'subcategory_name' => 'Health Boosters',
                'subcategory_id' => '101',
                'product_name' => 'Brain Booster Syrup',
                'slug' => Str::slug('Brain Booster Syrup'),
                'productheading' => 'Improve Mental Strength',
                'price' => 500,
                'dis_percentage' => '10',
                'dis_price' => 450,
                'product_detail' => 'This syrup helps in boosting brain function and memory.',
                'description' => 'A unique blend of ayurvedic ingredients to enhance mental alertness.',
                'availability' => 'In Stock',
                'availability_id' => '1',
                'image5' => null,
                'image6' => null,
                'status' => 'Active',
                'date' => Carbon::now()->toDateString(),
                'time' => Carbon::now()->toTimeString(),
                'color' => 1,
                'color_id' => 101,
                'color_name' => 'Brown',
                'size_id' => 1,
                'size_name' => '100ml',
                'sku' => 'SKU-BRAIN-100',
                'jewellery_care' => 'Store in a cool and dry place.',
                'shipping_info' => 'Delivery in 3-5 business days.',
                'length' => '10cm',
                'breadth' => '4cm',
                'height' => '15cm',
                'weight' => '200g',
                'stock' => 100,
                'images' => 'brain-booster.jpg'
            ],
            [
                'code' => 'PROD002',
                'category_name' => 'Ayurvedic',
                'category_id' => '1',
                'subcategory_name' => 'Pain Relief',
                'subcategory_id' => '102',
                'product_name' => 'Pain Relief Oil',
                'slug' => Str::slug('Pain Relief Oil'),
                'productheading' => 'Natural Pain Reliever',
                'price' => 300,
                'dis_percentage' => '15',
                'dis_price' => 255,
                'product_detail' => 'Effective oil for joint and muscle pain.',
                'description' => 'Ayurvedic oil with herbs to reduce inflammation and pain.',
                'availability' => 'In Stock',
                'availability_id' => '1',
                'image5' => null,
                'image6' => null,
                'status' => 'Active',
                'date' => Carbon::now()->toDateString(),
                'time' => Carbon::now()->toTimeString(),
                'color' => 2,
                'color_id' => 102,
                'color_name' => 'Yellow',
                'size_id' => 2,
                'size_name' => '200ml',
                'sku' => 'SKU-PAIN-200',
                'jewellery_care' => 'Keep away from direct sunlight.',
                'shipping_info' => 'Delivery in 2-4 business days.',
                'length' => '12cm',
                'breadth' => '5cm',
                'height' => '18cm',
                'weight' => '250g',
                'stock' => 150,
                'images' => 'pain-relief-oil.jpg'
            ]
        ]);
    }
}
