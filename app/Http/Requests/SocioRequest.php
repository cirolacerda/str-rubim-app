<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'nome' => 'required|min:3|max:40',
            'matricula' => 'required',
            'data_admissao' => 'required',
            'data_nascimento' => 'required',
            'natural' => 'required',
            'nome_mae' => 'required',
            'nome_pai' => 'required',
            'estado_civil' => 'required',
            'eleitor' => 'required',
            'grau_instrucao' => 'required',
            'tipo_trabalho' => 'required',
            'area_trabalha' => 'required',
            'tamanho_propriedade' => 'required',
            'escritura_prop' => 'required',
            'cadastrado' => 'required',
            'assalariado' => 'required',
            'carteira_assinada' => 'required',
            'salario' => 'required',
            'tempo_trabalho' => 'required',
            'anos_municipio' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'propriedade_de' => 'required',
            'data_emissao' => 'required',
            'rg' => 'required',
            'cpf' => 'required|min:14',

        ];
    }

     /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
{
    return [
        'required' => 'O campo :attribute deve ser preenchido',
        'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
        'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
        'cpf.min' => 'O campo cpf deve ter no mínimo 14 caracteres',

    ];
}
}
