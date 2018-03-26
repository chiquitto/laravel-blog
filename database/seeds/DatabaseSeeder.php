<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Blog\Categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaTableSeeder::class);
    }
}

class CategoriaTableSeeder extends Seeder {

    public function run() {
        $sql = 'insert into categorias
        (categoria, descricao, situacao, created_at, updated_at)
values (?,?,?,?,?)';

        $agora = date('Y-m-d H:i:s');

        DB::insert($sql, ['Jogos', 'Jogos', Categoria::SITUACAO_ATIVO, $agora, $agora]);
        DB::insert($sql, ['Política', 'Política', Categoria::SITUACAO_ATIVO, $agora, $agora]);
        DB::insert($sql, ['Esportes', 'Esportes', Categoria::SITUACAO_INATIVO, $agora, $agora]);
    }

}