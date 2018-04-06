<?php

namespace Blog\Http\Controllers;

use Blog\Categoria;
use Blog\Http\Requests\PostagemRequest;
use Blog\Postagem;
use Illuminate\Http\Request;

class PostagemController extends Controller
{
    public function listar()
    {
        // $postagens = Postagem::all();
        $postagens = Postagem::with('categoria')->get();

        $data = [
            'postagens' => $postagens
        ];

        return view('postagem.listar', $data);
    }

    public function novoForm() {
        $categorias = Categoria::all();

        return view('postagem.novo-form', [
            'categorias' => $categorias
        ]);
    }

    public function novo(PostagemRequest $request) {

        $postagem = new Postagem();
        $postagem->setAttribute('idCategoria', $request->get('idCategoria'));
        $postagem->setAttribute('titulo', $request->get('titulo'));
        $postagem->setAttribute('texto', $request->get('texto'));
        $postagem->save();

        return redirect()->route('postagem-listar');

    }
}
