<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public const SITUACAO_ATIVO = 'A';
    public const SITUACAO_INATIVO = 'I';
}
