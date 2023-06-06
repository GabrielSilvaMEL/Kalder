@extends('site.layout')

@section('content')
<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 90%;">
    <center>
        <h1>Editar Post </h1>
    </center>
    <hr class="my-4">
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

            <!-- //* Nome -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titulo:</strong>
                    <input type="input" name="titulo" class="form-control" value="{{ $post->titulo }}" maxlength="100">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titulo Resumido:</strong>
                    <input type="input" name="tituloresumido" class="form-control" value="{{ $post->tituloresumido }}" maxlength="100">
                </div>
            </div>

            
            <!-- //* Descricao -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Corpo:</strong>
                    <input type="input" name="corpo" class="form-control" value="{{ $post->corpo}}" maxlength="200">
                </div>
            </div>

            

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data de Publicação:</strong>
                    <input type="input" Readonly name="datapub" class="form-control" value="{{ $post->datapub  }}">
                </div>
            </div>

           
            <!-- //* Autor -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Autor: </strong>
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
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagem:</strong>
                    <input type="text" name="imagem" value="{{ $post->autor->imagem }}" class="form-control mb-2" placeholder="Imagem">
                </div>
            </div>

            <!-- //? Atualizar -->
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </div>

    </form>



@endsection