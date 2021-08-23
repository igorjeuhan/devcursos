<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); //cria chave primária chamada ID
            $table->string('titulo', 100)->unique();
            $table->string('descricao', 200);
            $table->char('categoria', 4);
            $table->int('nivel', 2);
            $table->char('produtor', 2);
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
        Schema::dropIfExists('courses');
    }
}
