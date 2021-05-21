<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'cnpj',
        'endereco',
        'email',
        'telefone',
        'nome_do_responsavel',
        'cpf',
        'celular',
    ];

    public function proposal()
    {
        return $this->hasMany(Proposal::class, 'cli_id')->orderBy("nome_fantasia");;
    }}
