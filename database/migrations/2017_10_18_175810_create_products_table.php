<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id')->references('id')->on('categories');
            $table->string('code', 11);
            $table->double('price', 15, 2);
            $table->integer('count');
            $table->string('brand');
            $table->string('preview');
            $table->string('description');
            $table->boolean('is_new')->default(false);
            $table->boolean('is_recommended')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
