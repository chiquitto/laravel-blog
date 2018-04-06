<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    protected $primaryKey = 'idPostagem';
    protected $table = 'postagens';

    public const SITUACAO_ATIVO = 'A';
    public const SITUACAO_INATIVO = 'I';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'idCategoria', 'idCategoria');
    }
}
