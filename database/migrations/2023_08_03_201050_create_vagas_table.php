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
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_vaga', 100);
            $table->text('descricao');
            $table->date('data_publicacao');
            $table->date('data_expiracao')->nullable();
            $table->string('cidade_atuacao', 255);
            $table->unsignedBigInteger('faixa_salarial');
            $table->unsignedBigInteger('modalidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
