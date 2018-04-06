<h1>Editar categoria</h1>

@if (count($errors) > 0)
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form method="post" action="{{ route('categoria-editar', ['id' => $categoria->idCategoria]) }}">

    <input
            type="hidden"
            name="_token"
            value="{{{ csrf_token() }}}" />

    <p>Categoria: <input type="text" name="categoria" value="{{ old('categoria', $categoria->categoria) }}"></p>
    <p>Descrição: <textarea name="descricao">{{ old('descricao', $categoria->descricao) }}</textarea></p>

    <input type="submit" value="Salvar">

</form>