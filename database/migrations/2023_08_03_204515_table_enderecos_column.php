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
        Schema::table('enderecos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_empresa');
            $table->foreign('id_empresa')->references('id')->on('anunciantes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('enderecos', function (Blueprint $table) {
            $table->dropForeign(['id_empresa']);
            $table->dropColumn('id_empresa');
        });
    }
};
