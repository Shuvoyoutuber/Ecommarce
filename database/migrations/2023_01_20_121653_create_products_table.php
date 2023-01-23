<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Product_name');
            $table->string('Product_short_deshcription');
            $table->string('Product_long_deshcription');
            $table->string('Product_price');
            $table->integer('Product_category_id');
            $table->integer('Product_sub_category_id');
            $table->string('Product_category_name');
            $table->string('Product_sub_category_name');
            $table->string('Product_img');
            $table->string('Product_slug');
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
};
