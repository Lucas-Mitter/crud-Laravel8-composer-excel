<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProposalResquest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cli_id'=> 'required',
            'endereco_da_obra'=> 'required|string',
            'valor_total'=> 'required|numeric',
            'sinal'=> 'required|numeric',
            'quantidade_de_parcela'=> 'required|numeric',
            'valor_das_parcelas'=> 'required|numeric',
            'data_ini_do_pag'=> 'required|date',
            'data_das_parcelas'=> 'required|date',
            'anexar_arquivo'=> '',
            'status'=> 'required'
        ];
    }
}
