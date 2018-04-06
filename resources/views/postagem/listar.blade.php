<h1>Postagens</h1>

<p>
    [<a href="{{ route('postagem-novo-form') }}">Nova postagem</a>]
</p>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Categoria</th>
        <th>Postagem</th>
        <th></th>
    </tr>
    </thead>

    <tbody>

    @foreach ($postagens as $postagem)
    <tr>
        <td>{{ $postagem->idPostagem }}</td>
        <td>{{ $postagem->categoria->categoria }}</td>
        <td>{{ $postagem->titulo }}</td>
        <td>
            [<a href="{{ route('categoria-editar-form', ['id' => $postagem->idPostagem]) }}">Editar</a>]
            [<a href="{{ route('categoria-apagar', ['id' => $postagem->idPostagem]) }}">Apagar</a>]
        </td>
    </tr>
    @endforeach

    </tbody>
</table>