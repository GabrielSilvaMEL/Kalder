@extends('site.layout')

@section('content')

<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 90%;">
    <center>
        <h1>Cadastrar Post</h1>
    </center>
    
    <hr class="my-4">
   
        <!-- titulo -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $post->titulo }}
            </div>
        </div>

        <!-- Titulo resumido -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo Resumido:</strong>
                {{ $post->tituloresumido }}
            </div>
        </div>

        <!-- //* Corpo -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Corpo da postagem:</strong>
                {{ $post->corpo }}
            </div>
        </div>

        <!-- //* Data -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data de publicação:</strong>
                {{ $post->datapub }}
            </div>
        </div>

        <!-- //* Autor -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Autor:</strong>
                {{ $post->autor->nome }}
            </div>
        </div>

        <!-- //* Biografia -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Biografia:</strong>
                {{ $post->biografia }}
            </div>
        </div>

        <!-- //* Imagem -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imagem:</strong>
                {{ $post->autor->foto }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>autorid:</strong>
                {{ $post->autor_id }}
            </div>
        </div>
    <center>
        <a class="btn btn-primary" href="{{ route('postsmanager.index') }}"> Voltar</a>
    </center>
</div>
@endsection