<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id'); // int(11) AUTO_INCREMENT
            $table->string('category', 255); // varchar(255) NOT NULL
            $table->string('link', 255)->nullable(); // varchar(255) NULL
            $table->string('image', 255); // varchar(255) NOT NULL
            $table->string('banner_image', 255); // varchar(255) NOT NULL
            $table->integer('is_parent')->nullable(); // int(50) NULL
            $table->integer('parent_id')->nullable()->index(); // int(50) NULL with index
            $table->string('slug', 200)->nullable()->index(); // varchar(200) NULL with index
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
}
