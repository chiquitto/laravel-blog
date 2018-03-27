<?php

namespace Blog\Http\Controllers;

use Blog\Categoria;
use Blog\Http\Requests\CategoriasRequest;
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

    public function novo(CategoriasRequest $request) {

        $categoria = new Categoria();
        $categoria->setAttribute('categoria', $request->get('categoria'));
        $categoria->setAttribute('descricao', $request->get('descricao'));
        $categoria->setAttribute('situacao', Categoria::SITUACAO_ATIVO);
        $categoria->save();

        return redirect()->route('categoria-listar');

    }
}
