<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToArray;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable = [
       'cli_id',
       'endereco_da_obra',
       'valor_total',
       'sinal',
       'quantidade_de_parcela',
       'valor_das_parcelas',
       'data_ini_do_pag',
       'data_das_parcelas',
       'anexar_arquivo',
       'status',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'cli_id');
    }

    public function excel()
    {
        $records = DB::table('proposals')->select('endereco_da_obra',
        'valor_total',
        'sinal',
        'quantidade_de_parcela',
        'valor_das_parcelas',
        'data_ini_do_pag',
        'data_das_parcelas',)->get()->ToArray();

        return $records;
    }

}
