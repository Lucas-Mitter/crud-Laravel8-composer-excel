<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('razao_social', 70);
            $table->string('nome_fantasia', 50);
            $table->string('cnpj', 20)->unique();
            $table->string('endereco', 150);
            $table->string('email', 50);
            $table->string('telefone', 15);
            $table->string('nome_do_responsavel', 100);
            $table->string('cpf', 15);
            $table->string('celular', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
