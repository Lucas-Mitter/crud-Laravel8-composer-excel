<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cli_id');
            $table->string('endereco_da_obra', 100);
            $table->decimal('valor_total', 9, 2);
            $table->decimal('sinal', 9, 2);
            $table->integer('quantidade_de_parcela');
            $table->decimal('valor_das_parcelas', 9, 2);
            $table->date('data_ini_do_pag');
            $table->date('data_das_parcelas');
            $table->string('anexar_arquivo');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->foreign('cli_id')->references('id')->on('Clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
}
