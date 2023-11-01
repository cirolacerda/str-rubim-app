<?php

namespace App\Models;

use App\Enums\EstadoCivil;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'matricula',
        'data_admissão',
        'data_nascimento',
        'natural',
        'nome_mae',
        'nome_pai',
        'estado_civil',
        'eleitor',
        'grau_instrucao',
        'tipo_trabalho',
        'area_trabalha',
        'tamanho_propriedade',
        'escritura_prop',
        'cadastrado',
        'assalariado',
        'carteira_assinada',
        'salario',
        'tempo_trabalho',
        'anos_municipio',
        'endereco',
        'propriedade_de',
        'nome_esposa',
        'data_emissao',
        'rg',
        'cpf'
    ];

    protected $cast = [
        'estado_civil' => EstadoCivil::class
    ];
}
