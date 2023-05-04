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
        
        <!-- Nome do show -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $post->titulo }}
            </div>
        </div>

        <!-- Descrição -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo Resumido:</strong>
                {{ $post->tituloresumido }}
            </div>
        </div>

        <!-- //* QtdeIngressos -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Corpo:</strong>
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

        <!-- //* Artista -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Artista:</strong>
                {{ $post->autor->nome }}
            </div>
        </div>

        <!-- //* Local -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Local:</strong>
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