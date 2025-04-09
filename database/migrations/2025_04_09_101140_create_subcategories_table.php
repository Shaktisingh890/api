<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    public function up(): void
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->increments('id'); // int(11) AUTO_INCREMENT PRIMARY KEY
            $table->string('subcategory', 255); // NOT NULL
            $table->unsignedInteger('category_id'); // Foreign Key
            $table->string('link', 255)->nullable(); // NULLABLE
            $table->string('image', 255); // NOT NULL
            $table->string('banner_image', 255); // NOT NULL
            $table->string('status', 255)->default('Active'); // You can set default or NOT NULL as per need

            // Foreign Key Constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

         
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
}

