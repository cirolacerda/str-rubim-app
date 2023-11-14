<?php

namespace App\Models;

use App\Enums\EstadoCivil;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Socio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'matricula',
        'data_admissao',
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
        'telefone',
        'propriedade_de',
        'nome_esposa',
        'data_emissao',
        'rg',
        'cpf'
    ];

    protected $casts = [
        'estado_civil' => EstadoCivil::class,

    ];


    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i:s');

    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i:s');

    }

}
