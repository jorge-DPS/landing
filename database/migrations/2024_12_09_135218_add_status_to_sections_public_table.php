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
            $table->boolean('status')->default(false);  // El campo 'status' por defecto es 'true'
            $table->softDeletes();  // Esto agregará el campo 'deleted_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sections_public', function (Blueprint $table) {
            //
            $table->dropColumn('status');  // Eliminamos la columna 'status' si se revierte la migración
            $table->dropSoftDeletes();  // Elimina el campo 'deleted_at'
        });
    }
};
