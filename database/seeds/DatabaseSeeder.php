<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Blog\Categoria;
use Blog\Postagem;
use Blog\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(PostagemTableSeeder::class);
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

class PostagemTableSeeder extends Seeder {

    public function run() {
        $postagem1 = new Postagem([
            'idCategoria' => 1,
            'titulo' => 'Jogos de computador facilitam o aprendizado',
            'texto' => 'Pesquisa aponta que jogos de computador facilitam o aprendizado',
            'situacao' => Postagem::SITUACAO_ATIVO,
            'idUsuario' => 1
        ]);
        $postagem1->save();
    }

}

class UsuarioTableSeeder extends Seeder {
    public function run() {
        $usuario = new User();
        $usuario->name = 'Alisson Chiquitto';
        $usuario->email = 'chiquitto@gmail.com';
        $usuario->password = \Illuminate\Support\Facades\Hash::make('123456');
        $usuario->save();
    }
}