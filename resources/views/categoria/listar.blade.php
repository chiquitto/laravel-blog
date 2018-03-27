<h1>Categorias</h1>

<p>
    [<a href="{{ route('categoria-novo-form') }}">Nova categoria</a>]
</p>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Categoria</th>
        <th></th>
    </tr>
    </thead>

    <tbody>

    @foreach ($categorias as $categoria)
    <tr>
        <td>{{ $categoria->id }}</td>
        <td>{{ $categoria->categoria }}</td>
        <td>
            [<a href="{{ route('categoria-editar-form', ['id' => $categoria->id]) }}">Editar</a>]
            [<a href="{{ route('categoria-apagar', ['id' => $categoria->id]) }}">Apagar</a>]
        </td>
    </tr>
    @endforeach

    </tbody>
</table>