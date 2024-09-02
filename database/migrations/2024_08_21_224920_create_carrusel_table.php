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
        Schema::create('carrusel', function (Blueprint $table) {
            $table->id();
            $table->string('small_title')->nullable();
            $table->string('big_title')->nullable();
            $table->string('description')->nullable();
            $table->string('mobile_background')->nullable();
            $table->string('desktop_background')->nullable();
            $table->string('tablet_background')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrusel');
    }
};
