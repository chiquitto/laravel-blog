@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1>Categorias</h1>

                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <p>
                    [<a href="{{ route('categoria-novo-form') }}">Nova categoria</a>]
                </p>

                <table class="table">
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
                            <td>{{ $categoria->idCategoria }}</td>
                            <td>{{ $categoria->categoria }}</td>
                            <td>
                                [<a href="{{ route('categoria-editar-form', ['id' => $categoria->idCategoria]) }}">Editar</a>]
                                [<a data-confirm="Are you sure to delete this item?" href="{{ route('categoria-apagar', ['id' => $categoria->idCategoria]) }}">Apagar</a>]
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection