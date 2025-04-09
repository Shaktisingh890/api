<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code', 'category_name', 'category_id',
        'subcategory_name', 'subcategory_id',
        'product_name', 'slug', 'productheading', 'price',
        'dis_percentage', 'dis_price', 'product_detail', 'description',
        'availability', 'availability_id',
        'images',
        'status', 'date', 'time',
        'color', 'color_id', 'color_name',
        'size_id', 'size_name', 'sku',
        'jewellery_care', 'shipping_info',
        'length', 'breadth', 'height', 'weight', 'stock'
    ];
    public $timestamps=false;
}
