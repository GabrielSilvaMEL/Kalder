@extends('site.layout')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Post</h1>
    <hr class="my-4">
</div>
<div class="container">
    <a class="btn btn-primary" href="{{ route('autormanager.index') }}"> Voltar</a>
    <p></p>
    <div class="row">
        
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
    </div>
</div>
@endsection