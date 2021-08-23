<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creators', function (Blueprint $table) {
            $table->id(); //cria chave primária chamada ID
            $table->string('nome', 100)->unique();
            $table->char('especialidade', 2);
            $table->string('contato', 20);
            $table->int('tipo', 2);
            $table->$table->timestamps(); //Cria informação de quando foi criado um registro e quando foi atualizado
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creators');
    }
}
