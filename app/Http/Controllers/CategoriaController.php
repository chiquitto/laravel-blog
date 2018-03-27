<?php

namespace Blog\Http\Controllers;

use Blog\Categoria;
use Blog\Http\Requests\CategoriasRequest;
use Illuminate\Http\Request;

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

    public function editarForm(Request $request) {
        $id = $request->route('id');

        $categoria = Categoria::find($id);

        return view('categoria.editar-form', [
            'categoria' => $categoria
        ]);
    }

    public function novo(CategoriasRequest $request) {

        $categoria = new Categoria();
        $categoria->setAttribute('categoria', $request->get('categoria'));
        $categoria->setAttribute('descricao', $request->get('descricao'));
        $categoria->setAttribute('situacao', Categoria::SITUACAO_ATIVO);
        $categoria->save();

        return redirect()->route('categoria-listar');

    }

    public function editar(CategoriasRequest $request) {

        $id = $request->route('id');

        $categoria = Categoria::find($id);

        $categoria->setAttribute('categoria', $request->get('categoria'));
        $categoria->setAttribute('descricao', $request->get('descricao'));
        
        $categoria->save();

        return redirect()->route('categoria-listar');

    }
}
