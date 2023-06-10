@extends('site.layout')

@section('content')

<div class="mt-5 text-start mx-auto text-white p-3 div-abtus" style="width: 70%;">
    <center>
        <h1>Exibição de Cadastro do(a) Autor(a) {{ $autor->nome }}</h1>
    </center>

    <hr class="my-4">

    <!-- Nome -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome</strong><br>
            {{ $autor->nome }}
        </div>
    </div>
    <br>
        
    <!-- Biografia -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Biografia</strong><br>
            {{ $autor->biografia }}
        </div>
    </div>
    <br>

    <!-- Profissão -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Profissão</strong><br>
            {{ $autor->descabreviada }}
        </div>
    </div>
    <br>

    <!-- Imagem -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Imagem</strong><br>
            {{ $autor->imagem }}
        </div>
    </div>
    <br>

    <!-- E-mail -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>E-mail</strong><br>
            {{ $autor->email}}
        </div>
    </div>
    <br>    
        
    <center>
    <a class="btn btn-primary" href="{{ route('autoresmanager.index') }}"> Voltar</a>
    </center>
</div>

@endsection
