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
        Schema::create('appointment_schedule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->date('appointment_date');
            $table->boolean('cancel');
            $table->string('reason_for_cancelation');
            $table->boolean('verified');
            $table->date('date_create');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('user_catmoon')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_schedule');
    }
};
