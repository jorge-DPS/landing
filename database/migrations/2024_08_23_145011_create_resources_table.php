<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->enum('type', ['I', 'V']); // I for Image, V for Video
            $table->boolean('status')->default(true);
            $table->foreignId('gallery_section_id')->constrained('gallery_sections')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resources');
    }
};
