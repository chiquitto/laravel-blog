<?php

namespace Blog\Http\Controllers;

use Blog\Categoria;
use Request;

class CategoriaController extends Controller
{
    public function listar()
    {
        $categorias = Categoria::all();

        $data = [
            'categorias' => $categorias
        ];

        return view('categoria.listar', $data);
    }

    public function novoForm() {
        return view('categoria.novo-form');
    }

    public function novo() {

        $categoriaInput = Request::input('categoria');
        $descricaoInput = Request::input('descricao');

        $categoria = new Categoria();
        $categoria->setAttribute('categoria', $categoriaInput);
        $categoria->setAttribute('descricao', $descricaoInput);
        $categoria->setAttribute('situacao', Categoria::SITUACAO_ATIVO);

        $categoria->save();

        return redirect()->route('categoria-listar');
    }
}
