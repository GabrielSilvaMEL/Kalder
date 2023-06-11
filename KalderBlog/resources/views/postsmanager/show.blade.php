@extends('site.layout')

@section('content')

<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 70%;">
    <center>
        <h1>Exibição de Postagem</h1>
    </center>
    
    <hr class="my-4">

    <!-- Título -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Título da Postagem</strong><br>
            {{ $post->titulo }}
        </div>
    </div>
    <br>

    <!-- Título Resumido -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Título Resumido</strong><br>
            {{ $post->tituloresumido }}
        </div>
    </div>
    <br>

    <!-- Corpo -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Corpo da Postagem</strong><br>
            {{ $post->corpo }}
        </div>
    </div>
    <br>

    <!-- Data da Publicação -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Data da Publicação</strong><br>
            {{ $post->datapub }}
        </div>
    </div>
    <br>

    <!-- Imagem -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Imagem Ilustrativa</strong><br>
            {{ $post->imagem }}
        </div>
    </div>
    <br>

    <!-- Autor -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Autor</strong><br>
            {{ $post->autor->nome }}
        </div>
    </div>

    <center>
        <a class="btn btn-primary" href="{{ route('postsmanager.index') }}"> Voltar</a>
    </center>
</div>
@endsection