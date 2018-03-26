<h1>Categorias</h1>

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
            [<a href="#">Editar</a>]
            [<a href="#">Apagar</a>]
        </td>
    </tr>
    @endforeach

    </tbody>
</table>