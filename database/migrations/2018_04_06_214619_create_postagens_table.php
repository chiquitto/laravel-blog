<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Blog\Postagem;

class CreatePostagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postagens', function (Blueprint $table) {
            $table->increments('idPostagem');
            $table->unsignedInteger('idCategoria');
            $table->string('titulo');
            $table->string('texto');
            $table->enum('situacao', [
                Postagem::SITUACAO_ATIVO,
                Postagem::SITUACAO_INATIVO
            ]);
            $table->timestamps();

            $table->foreign('idCategoria')->references('idCategoria')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postagens');
    }
}
