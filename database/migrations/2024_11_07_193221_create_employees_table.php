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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Nombre del empleado
            $table->string('position')->nullable();  // Posición o cargo del empleado
            $table->string('image')->nullable();  // Ruta de la imagen del empleado
            $table->boolean('status')->default(true);  // Estado (activo/inactivo)
            $table->unsignedBigInteger('section_id');  // Clave foránea para la sección
            $table->foreign('section_id')->references('section_type_id')->on('sections_public')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};