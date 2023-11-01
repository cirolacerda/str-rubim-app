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
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 40);
            $table->string('matricula');
            $table->date('data_admissão');
            $table->date('data_nascimento');
            $table->string('natural', 30);
            $table->string('nome_mae', 40);
            $table->string('nome_pai', 40);
            $table->enum('estado_civil', ['casado_civil', 'casado_religioso', 'solteiro', 'viuvo', 'divorciado', 'desquitado']);
            $table->boolean('eleitor');
            $table->string('grau_instrucao');
            $table->string('tipo_trabalho');
            $table->string('area_trabalha');
            $table->string('tamanho_propriedade');
            $table->boolean('escritura_prop');
            $table->boolean('cadastrado');
            $table->boolean('assalariado');
            $table->boolean('carteira_assinada');
            $table->double('salario');
            $table->string('tempo_trabalho');
            $table->string('anos_municipio');
            $table->string('endereco');
            $table->string('propriedade_de');
            $table->string('nome_esposa', 40);
            $table->date('data_emissao');
            $table->string('rg', 40);
            $table->string('cpf', 40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socios');
    }
};
