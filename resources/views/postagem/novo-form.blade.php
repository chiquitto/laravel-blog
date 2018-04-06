<h1>Nova postagem</h1>

@if (count($errors) > 0)
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form method="post" action="{{ route('postagem-novo') }}">

    <input
            type="hidden"
            name="_token"
            value="{{{ csrf_token() }}}" />

    <p>Título: <input type="text" name="titulo" value="{{ old('titulo') }}"></p>

    <p>Categoria: <select name="idCategoria">
            <option value="0">Selecione uma opção</option>

            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->idCategoria }}" {{ (old("idCategoria") == $categoria->idCategoria ? "selected":"") }}>{{ $categoria->categoria }}</option>
            @endforeach

        </select></p>

    <p>Texto: <textarea name="texto">{{ old('texto') }}</textarea></p>

    <input type="submit" value="Salvar">

</form>