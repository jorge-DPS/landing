<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('person_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('section_id')->constrained('sections_public')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('person_sections');
    }
};
