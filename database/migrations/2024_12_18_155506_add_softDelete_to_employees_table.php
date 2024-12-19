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
        Schema::table('employees', function (Blueprint $table) {
            //
            // $table->string('banner')->nullable()->after('id');
            $table->softDeletes(); // Agrega la columna 'deleted_at' para soporte de soft deletes.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            //
            // $table->dropColumn('banner');
            $table->dropSoftDeletes(); // Elimina la columna 'deleted_at'.
        });
    }
};
