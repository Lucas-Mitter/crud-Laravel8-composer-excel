<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClientResquest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'razao_social'=> 'required|string',
            'nome_fantasia'=> 'required|string',
            'cnpj'=> 'required|digits:14',
            'endereco'=> 'required|string',
            'email'=> 'required|email',
            'telefone'=> 'required|numeric',
            'nome_do_responsavel'=> 'required|string',
            'cpf'=> 'required|digits:11|numeric',
            'celular'=> 'required|digits:11|numeric'
        ];
    }
}
