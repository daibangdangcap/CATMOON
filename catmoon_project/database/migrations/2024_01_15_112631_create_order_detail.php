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
        Schema::create('order_detail', function (Blueprint $table) {
            $table->unsignedBigInteger('id_order');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('id_product');
            $table->double('base_price');
            $table->integer('item_quantity');
            $table->double('item_total_price');
            $table->timestamps();
            $table->primary(['id_order','id','id_product']);
            $table->foreign('id_order')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('id_product')->references('id')->on('item_product')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};
