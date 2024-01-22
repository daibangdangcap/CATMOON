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
        Schema::create('cat', function (Blueprint $table) {
            $table->id();
            $table->string('name_cat');
            $table->string('date_birth');
            $table->json('description');
            $table->string('adopted');
            $table->unsignedBigInteger('id_cat_cate');
            $table->foreign('id_cat_cate')->references('id')->on('cat_category');
            $table->date('date_create');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cat');
    }
};
