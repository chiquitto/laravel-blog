<h1>Nova categoria</h1>

<form method="post" action="/admin/categorias/novo">

    <input
            type="hidden"
            name="_token"
            value="{{{ csrf_token() }}}" />

    <p>Categoria: <input type="text" name="categoria"></p>
    <p>Descrição: <textarea name="descricao"></textarea></p>

    <input type="submit" value="Salvar">

</form>