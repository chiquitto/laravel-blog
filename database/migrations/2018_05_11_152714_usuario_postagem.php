<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioPostagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('postagens', function(Blueprint $table) {
            $table->unsignedInteger('idUsuario');

            $table->foreign('idUsuario', 'fk_postagens_idUsuario')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('postagens', function (Blueprint $table) {
            $table->dropForeign('fk_postagens_idUsuario');
        });
    }
}
