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
        Schema::create('covers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('section_id'); // Relación con la sección
            $table->string('title');  // Título de la portada
            $table->string('subtitle')->nullable();  // Subtítulo
            $table->text('description')->nullable();  // Descripción
            $table->string('image')->nullable();  // Imagen de la portada
            $table->boolean('status')->default(false);  // Solo una portada puede estar activa (true), las demás false
            $table->string('button_text')->nullable();  // Texto del botón
            $table->string('button_url')->nullable();  // URL del botón
            $table->boolean('open_in_new_tab')->default(false);  // Controla si el link se abre en nueva pestaña
            $table->enum('image_position', ['left', 'right'])->default('left'); // Campo para la posición de la imagen
            $table->softDeletes(); // Agrega la columna 'deleted_at' para SoftDeletes
            $table->timestamps();
        
            // Relación con la tabla sections_public
            $table->foreign('section_id')->references('id')->on('sections_public')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('covers');
    }
};
