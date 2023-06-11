@extends('site.layout')

@section('content')

<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 90%;">
    <center>
        <h1>Cadastro de Postagens</h1>
    </center>
    
    <hr class="my-4">
    <a class="btn btn-success" href="{{ route('autoresmanager.create') }}">Cadastrar Postagem</a>
    <a class="btn btn-primary" href="{{ route('site.autores') }}"> Voltar</a>
    
    <p></p>
    @if ($message = Session::get('success'))
        <p></p>
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @csrf
    @method('PUT')

    <table class="table table-dark table-striped table-hover" style="color:white">
        <tr>
            <th>N°</th>
            <th>Título</th>
            <th>Título Resumido</th>
            <th width="20%">Data de Publicação</th>
            <th width="280px">Ação</th>
        </tr>
        
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $post->titulo }}</td>
            <td>{{ $post->tituloresumido }}</td>
            <td>{{ $post->datapub }}</td>
            <td>
                <form action="{{ route('postsmanager.destroy', $post->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('postsmanager.show', $post->id) }}">Exibir</a>

                    <a class="btn btn-primary" href="{{ route('postsmanager.edit', $post->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    {!! $posts->links() !!} 
</div>
@endsection