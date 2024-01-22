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
        Schema::create('food_drinks', function (Blueprint $table) {
            $table->id();
            $table->string('name_drink');
            $table->double('price');
            $table->unsignedBigInteger('id_foodcate');
            $table->date('date_create');
            $table->foreign('id_foodcate')->references('id')->on('food_category')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_drinks');
    }
};
