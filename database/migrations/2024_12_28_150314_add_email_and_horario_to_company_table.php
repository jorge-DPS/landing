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
        Schema::table('company', function (Blueprint $table) {
            //
            $table->string('email')->nullable()->after('phone'); // Campo de correo electrónico
            $table->string('horario')->nullable()->after('email'); // Campo de horario
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company', function (Blueprint $table) {
            //
            $table->dropColumn('email');
            $table->dropColumn('horario');
        });
    }
};
