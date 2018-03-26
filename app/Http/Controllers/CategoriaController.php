<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function listar()
    {
        return view('categoria-listar');
    }
}
