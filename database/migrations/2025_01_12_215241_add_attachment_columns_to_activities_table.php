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
        Schema::table('activities', function (Blueprint $table) {
            //
            $table->string('attachment')->nullable()->after('cover_image'); // Cambia 'existing_column' por la columna después de la cual quieres agregar esta
            $table->string('attachment_title')->nullable()->after('attachment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activities', function (Blueprint $table) {
            //
            $table->dropColumn(['attachment', 'attachment_title']);
        });
    }
};
