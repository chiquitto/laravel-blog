<?php

namespace Blog\Http\Controllers;

use Blog\Postagem;
use Illuminate\Http\Request;

class PostagemController extends Controller
{
    public function listar()
    {
        $postagens = Postagem::all();

        $data = [
            'postagens' => $postagens
        ];

        return view('postagem.listar', $data);
    }
}
