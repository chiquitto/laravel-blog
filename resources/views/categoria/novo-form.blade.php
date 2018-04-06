<h1>Nova categoria</h1>

@if (count($errors) > 0)
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form method="post" action="{{ route('categoria-novo') }}">

    <input
            type="hidden"
            name="_token"
            value="{{{ csrf_token() }}}" />

    <p>Categoria: <input type="text" name="categoria" value="{{ old('categoria') }}"></p>
    <p>Descrição: <textarea name="descricao">{{ old('descricao') }}</textarea></p>

    <input type="submit" value="Salvar">

</form>