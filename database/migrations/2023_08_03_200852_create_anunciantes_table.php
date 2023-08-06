<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anunciantes', function (Blueprint $table) {
            $table->id();
            $table->string('razao_social', 255)->unique();
            $table->string('cnpj', 18)->unique();
            $table->string('telefone', 20);
            $table->string('email', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anunciantes');
    }
};
