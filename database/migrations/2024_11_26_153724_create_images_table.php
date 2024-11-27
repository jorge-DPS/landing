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
        Schema::create('images', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->unsignedBigInteger('section_id'); // Referencia a section_type_id de sections_public
            $table->string('filename'); // Almacena el nombre del archivo de imagen
            $table->timestamps();

            // Clave foránea para relacionar section_id con section_type_id en sections_public
            $table->foreign('section_id')
                  ->references('section_type_id') // Referencia el campo section_type_id
                  ->on('sections_public')        // Nombre de la tabla relacionada
                  ->onDelete('cascade');         // Eliminar imágenes si la sección es eliminada
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
