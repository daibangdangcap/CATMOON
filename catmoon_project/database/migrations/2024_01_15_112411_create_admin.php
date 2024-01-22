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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->date('DOB');
            $table->boolean('sex');
            $table->string('phone_number');
            $table->string('cccd');
            $table->string('username');
            $table->string('password');
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_role')->references('id')->on('role')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
