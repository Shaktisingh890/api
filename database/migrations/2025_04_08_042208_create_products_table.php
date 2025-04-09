<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->nullable();
            $table->string('category_name')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('subcategory_name')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('slug', 60)->nullable();
            $table->string('productheading');
            $table->integer('price')->nullable();
            $table->string('dis_percentage')->nullable();
            $table->integer('dis_price')->nullable();
            $table->text('product_detail')->nullable();
            $table->text('description')->nullable();
            $table->string('availability')->nullable();
            $table->string('availability_id')->nullable();
            $table->text('image6')->nullable();
            $table->string('status')->default('Active');
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->integer('color');
            $table->integer('color_id');
            $table->string('color_name')->nullable();
            $table->integer('size_id');
            $table->string('size_name');
            $table->string('sku');
            $table->text('shipping_info');
            $table->string('length');
            $table->string('breadth');
            $table->string('height');
            $table->string('weight');
            $table->unsignedInteger('stock');
            $table->string('images')->nullable();
           
            // Foreign Keys
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
