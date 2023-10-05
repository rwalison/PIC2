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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('rua_numero');
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('cidade_municipio');
            $table->string('estado_provincia');
            $table->string('cep');
            $table->string('pais');
            $table->string('instrucoes_entrega')->nullable();
            $table->string('nome_destinatario');
            $table->string('telefone_destinatario')->nullable();
            $table->string('produtos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
