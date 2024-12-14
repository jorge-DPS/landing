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
        Schema::table('sections_public', function (Blueprint $table) {
            //
            $table->integer('order')->default(0); // Si quieres que el valor por defecto sea 0
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sections_public', function (Blueprint $table) {
            //
            $table->dropColumn('order');
        });
    }
};
