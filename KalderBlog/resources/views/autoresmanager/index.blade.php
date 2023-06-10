@extends('site.layout')

@section('content')

<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 90%;">
    <center>
        <h1>Cadastro de Autores</h1>
    </center>
    <hr class="my-4">
    <a class="btn btn-success" href="{{ route('autoresmanager.create') }}">Cadastrar Autor</a>
    <a class="btn btn-primary" href="{{ route('site.autores') }}"> Voltar</a>

    <p></p>
    @if ($message = Session::get('success'))
        <p></p>
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <table class="table table-dark table-striped table-hover" style="color:white">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Profissão</th>
            <th>E-mail</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($autores as $autor)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $autor->nome }}</td>
            <td>{{ $autor->descabreviada }}</td>
            <td>{{ $autor->email }}</td>
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
</div>

@endsection