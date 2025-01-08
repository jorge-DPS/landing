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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre de la actividad
            $table->longText('description'); // Descripción en formato HTML (LONGTEXT)
            $table->date('start_date'); // Fecha de inicio
            $table->date('end_date'); // Fecha de fin
            $table->string('cover_image')->nullable(); // URL de la imagen de portada (opcional)
            // $table->string('attachment')->nullable(); // URL del archivo adjunto (opcional)
            // $table->string('attachment_title')->nullable(); // Título del archivo adjunto
            $table->softDeletes(); // Agrega la columna deleted_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
