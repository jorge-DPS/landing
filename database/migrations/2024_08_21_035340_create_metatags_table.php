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
        Schema::create('metatags', function (Blueprint $table) {
            $table->id();
            $table->string('page_name')->unique();
            $table->string('title')->nullable();
            $table->string('description', 160)->nullable();
            $table->string('keywords')->nullable();
            $table->string('author')->nullable();
            $table->string('robots')->nullable();
            $table->string('canonical')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_description', 160)->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_type')->nullable();
            $table->string('twitter_card')->nullable();
            $table->string('twitter_title')->nullable();
            $table->string('twitter_description', 160)->nullable();
            $table->string('twitter_image')->nullable();
            $table->string('favicon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metatags');
    }
};
