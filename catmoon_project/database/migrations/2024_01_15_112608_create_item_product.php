<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item_product', function (Blueprint $table) {
            $table->id();
            $table->string('name_product');
            $table->double('price');
            $table->integer('quantity');
            $table->unsignedBigInteger('id_cate_product');
            $table->unsignedBigInteger('id_brand');
            $table->timestamps();
            $table->foreign('id_cate_product')->references('id')->on('item_category')->onDelete('cascade');
            $table->foreign('id_brand')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_product');
    }
};
