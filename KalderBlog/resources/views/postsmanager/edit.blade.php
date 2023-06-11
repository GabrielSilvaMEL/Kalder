@extends('site.layout')

@section('content')

<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 60%;">
    <center>
        <h1>Editar Postagem</h1>
    </center>

    <hr class="my-4">

    <div class="container">
    <a class="btn btn-primary" href="{{ route('postsmanager.index') }}"> Voltar</a>
        <p></p>

        @if ($errors->any())
        <p></p>
        <div class="alert alert-danger">
            <strong>Ops!</strong> Houve algum problema com a entrada de dados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('postsmanager.update', $post) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <!-- Título -->
                <div class="form-group mb-4">
                    <strong>Título</strong>
                    <input type="input" name="titulo" class="form-control" value="{{ $post->titulo }}" maxlength="100">
                </div>

                <div class="form-group mb-4">
                    <strong>Título Resumido</strong>
                    <input type="input" name="tituloresumido" class="form-control" value="{{ $post->tituloresumido }}" maxlength="100">
                </div>
                
                <!-- //* Descricao -->
                <div class="form-group mb-4">
                    <strong>Corpo</strong>
                    <textarea name="corpo" class="form-control" maxlength="200">{{ $post->corpo}}</textarea>
                </div>

                <div class="form-group mb-4">
                    <strong>Data de Publicação</strong>
                    <input type="input" Readonly name="datapub" class="form-control" value="{{ $post->datapub  }}">
                </div>

                <!-- //* Autor -->
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group">
                        <strong>Autor</strong>
                        <select class="form-control" type="input" name="autor_id">
                            @foreach ($autores as $autor)
                            <option value="{{ $autor->id }}">{{ $autor->nome }}</option>

                            @endforeach
                        </select>

                        <select class="form-control" type="input" name="nome" hidden>
                            @foreach ($autores as $autor)
                            <option value="{{ $autor->nome }}" hidden>{{ $autor->nome }}</option>

                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- //* Imagem -->
                <div class="form-group mb-4">
                    <strong>Imagem</strong>
                    <input type="text" name="imagem" value="{{ $post->autor->imagem }}" class="form-control mb-2" placeholder="Imagem">
                </div>
            </div>
        </form>

        <center>
            <!-- Botões -->
            <button type="submit" class="btn btn-success">Atualizar</button> 
        </center>
    </div>
</div>


@endsection