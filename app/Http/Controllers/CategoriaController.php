<?php

namespace Blog\Http\Controllers;

use Blog\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function listar()
    {
        $categorias = Categoria::all();

        $data = [
            'categorias' => $categorias
        ];

        return view('categoria-listar', $data);
    }
}
