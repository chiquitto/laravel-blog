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
        $categoriaJogos = new Categoria([
            'categoria' => 'Jogos',
            'descricao' => 'Jogos',
            'situacao' => Categoria::SITUACAO_ATIVO,
        ]);
        $categoriaJogos->save();

        $categoriaPolitica = new Categoria([
            'categoria' => 'Politica',
            'descricao' => 'Politica',
            'situacao' => Categoria::SITUACAO_ATIVO,
        ]);
        $categoriaPolitica->save();

        $categoriaEsportes = new Categoria([
            'categoria' => 'Esportes',
            'descricao' => 'Esportes',
            'situacao' => Categoria::SITUACAO_INATIVO,
        ]);
        $categoriaEsportes->save();
    }

}