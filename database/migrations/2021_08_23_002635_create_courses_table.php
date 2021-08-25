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
            $table->integer('id_creator')->unsigned();
            $table->foreign('id_creator')->references('id')->on('creators');
            $table->string('titulo', 100)->unique();
            $table->string('descricao', 200);
            $table->char('categoria', 4);
            $table->integer('nivel');
            $table->integer('produtor',);
            $table->timestamps(); //Cria informação de quando foi criado um registro e quando foi atualizado
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
