@extends('site.layout')

@section('content')


<!-- PAGINA NAO FUNCIONARÁ ATÉ A CRIAÇÃO DO BANCO DE DADOS -->
<div class="jumbotron">
    <h1 class="display-4 white">Cadastro de Autores</h1>
    <hr class="my-4">
</div>
<div class="container">
  
    <a class="btn btn-success" href="{{ route('autoresmanager.create') }}">Cadastrar Artista</a>
    <p></p>
    @if ($message = Session::get('success'))
        <p></p>
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Imagem</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($autores as $autor)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $autor->nome }}</td>
            <td>{{ $autor->imagem }}</td>
            <td>
                <form action="{{ route('autoresmanager.destroy', $autor->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('autoresmanager.show', $autor->id) }}">Exibir</a>

                    <a class="btn btn-primary" href="{{ route('autoresmanager.edit', $autor->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $autores->links() !!}




@endsection
