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
        //
        Schema::table('vagas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_empresa');
            $table->unsignedBigInteger('status');
            $table->unsignedBigInteger('setor');
            $table->unsignedBigInteger('tipo_contrato');
            $table->foreign('id_empresa')->references('id')->on('anunciantes');
            $table->foreign('faixa_salarial')->references('id')->on('faixa_salarial');
            $table->foreign('modalidade')->references('id')->on('modalidade');
            $table->foreign('status')->references('id')->on('status');
            $table->foreign('setor')->references('id')->on('setor');
            $table->foreign('tipo_contrato')->references('id')->on('tipo_de_contrato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('vagas', function (Blueprint $table) {
            $table->dropForeign(['id_empresa']);
            $table->dropForeign(['faixa_salarial']);
            $table->dropForeign(['modalidade']);
            $table->dropForeign(['status']);
            $table->dropForeign(['setor']);
            $table->dropForeign(['tipo_contrato']);
            $table->dropColumn(['id_empresa']);
            $table->dropColumn(['status']);
            $table->dropColumn(['setor']);
            $table->dropColumn(['tipo_contrato']);
        });
    }
};
